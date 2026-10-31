# System version map (changelog)

This is the human-readable companion to
[`registry.php`](registry.php) — the machine-readable migration map the system
follows when it upgrades an older database (or warns about a newer one).

- The **code** version lives in [`../src/Version.php`](../src/Version.php)
  (`Version::SCHEMA`, currently **1**).
- The **database** version lives in the `system_version` table (one row).
- On boot / on restore, the engine compares the two:
  - database **behind** the code → replays the missing `up` migrations
    (v1 → v2 → v3 → …) to make the data compatible.
  - database **ahead** of the code → can't downgrade, so the system runs with
    only the tables it understands and the UI warns you (restore asks
    *Don't restore / Continue anyway*).

The live status is also available at `GET /api/system/version`.

---

## v1 — 1.0.0 (2026-06-01)

Initial release.

- POS, Orders, Products, Categories, Customers, Purchases, Stock
- Users + roles, Settings, System logs, Recovery codes
- Backup & Restore (+ restore during setup), custom backup folder
- Bundled portable MariaDB ("Use the built-in database")
- SSL/TLS toggle; switch / delete database from Settings
- Pending-payment order status (money owed) + receivables tracking
- Supplier directory + supplier payables (track money owed to suppliers; select a
  supplier on a purchase, record full/partial/credit payment, mark purchases paid)
- Built-in **Walk-by** supplier (auto-created) for one-off / unofficial sellers:
  selecting it on a purchase reveals a free-text field to note who the seller was,
  saved on that purchase (`purchases.supplier_note`) and shown on the purchase
  card/details and in the walk-by supplier's Account. Suppliers gain an
  `is_walkby` flag. Purchases page also gains a **Supplier** filter.
- Per-purchase supplier payments: each purchase can be paid in full or partially
  (Mark-paid), and exposes a payment **History** (date, user, amount paid,
  remaining) derived from the existing system logs — no extra table. The due date
  shows on the purchase card; each partial Mark-paid records whether it was paid
  **before / on / after** the due date (info) and lets you set a **new due date**
  for the still-owed remainder (rolling deadline; paying early keeps the original).
  The supplier
  **Account** pop-up reuses the real purchase cards (details / mark-paid / history)
  filtered to that supplier, with paid/partial/unpaid filters, so you settle debts
  from the purchase itself and read the running balance off the filtered list.
- Per-order **customer payments** — the receivables mirror of supplier payables.
  An owed ("pending payment") order now records **how much the customer paid up
  front** and accepts later **partial "Record payment"** installments, each with a
  payment **History** (date, user, amount, remaining) derived from the system logs
  — no extra table. A **rolling due date** shows on the order card; each payment
  records whether it landed **before / on / after** the due date and lets you set a
  **new due date** for the remainder. Installments never auto-close the order:
  **"Mark paid"** stays an explicit finish step that can still record a **loss**
  (forgive the rest) or **extra** (customer paid more), keeping the existing
  profit-adjustment behavior. New columns: `orders.amount_paid`, `orders.due_date`.
- Built-in **Walk-in** customer (auto-created) for one-off buyers, mirroring the
  Walk-by supplier: selecting it on an order reveals a free-text field to note who
  the buyer was, saved on that order (`orders.customer_note`) and shown on the
  order card/details and the internal report. Customers gain an `is_walkin` flag.
- Recurring bills module (rent, internet, electricity, subscriptions): configure
  amount + frequency (weekly/monthly/quarterly/yearly/custom), track next due
  date, mark a period paid (auto-advances the due date), per-bill payment history,
  and a "Bills due" dashboard reminder card
- **Bills overhaul (in progress).** Bills can be recorded as **paid in the past**
  (the real payment date is kept separate from the creation date) and a new bill can
  be entered with an **already-paid** back-fill so historical bills land with history.
  When a bill's due date passes the system **auto-accrues an owed period**
  (`bill_periods`) — "how much we owe the internet/electricity company" is tracked
  even before anyone marks it paid — and the bill card shows the **We owe** total.
  Each period can be **split across users** (`bill_shares`): set the cycle's actual
  amount, pick participants, **Split equally** (exact, remainder to the first share)
  or enter manual amounts. Each user pays their share in **small partial
  installments** (`bill_share_payments`), each tagged **from cost / from profit**;
  a share settles when fully paid and the period settles when every share is paid.
  Bill **Payment History** is now its own button + popup (separate from the activity
  log) showing single-payer and per-user installments together; the bill **note**
  shows on the card. `bill_payments` gains a `period_id` link. A share created for
  **another user stays pending** until that user **accepts / refuses / edits** it
  (edit to a smaller amount and pay the rest later); a **"Bills awaiting you"** inbox
  (badge on the Bills page) lists everything pending for the current user, and each
  period shows **who paid / who still owes**. **Only the assigned user (or an admin)
  can pay / accept / refuse / edit a share.** Each installment also carries a
  **disposition** (`bill_share_payments.disposition` = remove | keep): *remove*
  actually deducts it from the books, *keep* records it as paid without deducting.
  The **dashboard now nets bills**: "remove" installments reduce **Net Profit** (the
  from-cost part also shows in the **Cost** card), with a per-user **Profit & Loss
  panel** (Revenue · COGS · Manual · Bills-from-cost · Bills-from-profit · Net Profit)
  that's **printable**, all driven by the existing per-user lens + date range.
  **Reports:** a per-bill **filtered print** (all / still-owed / settled) and a
  **global all-users bills report** (every bill, period, who paid / who owes).
  New syslog actions: `bill_split`, `bill_share_paid`, `bill_share_accepted`,
  `bill_share_refused`, `bill_share_edited`. New endpoints: `GET /api/bills/expenses`,
  `GET /api/bills/report`, `GET /api/bills/{id}/report`, `GET /api/bill-shares/pending`,
  `POST /api/bill-shares/{id}/pay|accept|refuse|edit`, `GET|POST /api/bills/{id}/periods`.
  A recorded payment can now be **voided** (correct a mistake) — both per-user
  installments and legacy single-payer payments gain `voided_at`/`voided_by`/
  `void_reason`; a voided row stays in the history (struck through, reason shown) but
  no longer counts toward the share/period paid totals, the "We owe" figure, or the
  dashboard P&L. A period left short after a **refuse / edit-down** can be filled with
  **Cover remaining** — additive shares for just the uncovered gap (a share for
  someone else stays pending for their consent; existing paid shares are untouched),
  which is the path to settle a period once a participant backs out. Every share /
  period action (split, pay, accept, refuse, edit, void, cover) now also writes to the
  per-bill **Activity** timeline (not only the global system log). The dashboard
  **"Bills — we owe"** card shows the real accrued obligation (sum of open/partial
  periods) instead of an upcoming-amount reminder. Bill **categories** are a single-
  select icon grid and the chosen category shows with its icon on the bill card.
  Deleting a bill that still has money owed shows a warning with the amount. New
  syslog actions: `bill_payment_voided`, `bill_gap_covered`. New endpoints:
  `POST /api/bill-periods/{id}/cover`, `POST /api/bill-share-payments/{id}/void`,
  `POST /api/bill-payments/{id}/void`.
- **Per-user cost & profit.** Orders and purchases each carry an **owner**
  (`orders.owner_user_id`, `purchases.owner_user_id`) — who that row's cost/profit
  belongs to. It defaults to the creator (existing rows are back-filled from
  `created_by`) and is **reassignable** from the order/purchase details (logged as
  `owner_changed`). The Dashboard and Analytics gain a **per-user lens**: pick a
  user ("My numbers", default) or **Whole business** and every money card/chart
  (revenue, COGS, manual cost, net profit, owed-to-us, we-owe-suppliers) recomputes
  for that owner (shared catalog counts stay whole-business). The Orders and
  Purchases lists default to **"Only mine"** with a **"Show everyone"** reveal that
  badges each row's owner and logs a `user_data_viewed` entry so the revealed user
  can see who looked at their data. New endpoints: `POST /api/orders/{id}/owner`,
  `POST /api/purchases/{id}/owner`, `POST /api/users/{id}/view`.
- **Coin-as-product trading.** Your "currencies" (USDT, BTC, USD, EUR…) are just
  **products** priced/cost in your home currency; everything still sells in cash as
  usual. Two **barter** moves are added for the occasional coin-for-coin deal:
  - **Buy with a coin you hold** (purchase form → *"Pay with a coin I already hold"*,
    `purchases.settle_kind='product'`): buy BTC by spending USDT you hold.
  - **Sell, paid in a coin** (POS → *"Sell a coin, paid in a coin"*,
    `orders.settle_kind='product'`, `POST /api/orders/coin-swap`): sell USDT, receive
    BTC into stock.

  You enter the spent/sold coin's **cost manually** (values change daily) and the
  **cross rate** (`1 acquired = rate spent`); the system derives the quantity received
  and **carries the cost over** to the new coin — **no profit is booked at the swap**.
  Profit appears only when that coin is later sold for **real cash** (`profit = cash −
  carried cost`). The spent/sold coin is **FIFO-consumed**; the acquired coin enters
  stock at the carried basis (a `received` lot links back to its sale). A swap can be
  **unwound by deleting it**: deleting a buy-swap puts the spent coin back and removes
  the acquired coin; deleting a coin-sale (from the order **or** from its received lot)
  restores the sold coin, removes the received coin and reverses the sale. The exact
  FIFO lots are restored from a recorded `settle_consumed` JSON (legacy swaps use a
  best-effort restore). A completed coin-sale can equally be **reversed via its Return
  button** (same reversal, marked *returned* instead of *deleted*). **Unwinding is blocked
  only when the swapped-in coin has already been sold/used in another deal** (undo those
  first). Cards + order details show a
  **"Paid with X" / "Got for X"** badge and a profit-0 note; both forms have a live
  FIFO-accurate preview. New columns: `purchases.settle_kind`/`settle_product_id`
  /`settle_quantity`/`settle_order_id`/`settle_consumed`, `orders.settle_kind`
  /`settle_product_id`/`settle_quantity`/`settle_purchase_id`/`settle_consumed`.
- **Starter catalog + currency picker.** A **fresh install** seeds an editable/deletable
  default catalog **once** (Cash: US Dollar, Euro; Crypto: Bitcoin, USDT) so you don't
  start empty — guarded by `setup_state.catalog_seeded` so deleting them never brings
  them back, and never injected onto restored/real data. Settings gains a **pre-built
  Currency Symbol picker** (DZD / USD / EUR / GBP / …) that still falls back to a
  **Custom** free-text symbol.
- **Purchase batch picker.** When selling, the *Select Purchase Batch* step is now a
  **card picker** (opened from the sale dialog) instead of a cramped dropdown. Each batch
  shows as a card with a **Cash-buy / Coin-swap** tag, cost per unit, total cost, quantity
  **bought / sold / available** (after reservations), supplier, and **how much that exact
  batch has made so far** — the margin from the order lines sold out of it, computed
  server-side and returned on `/api/purchases` as `realized_profit` / `realized_revenue`
  (completed + delivered-but-owed sales; deleted/returned excluded). The picker has
  **search** + a **type** filter (all / cash / swap) + **sort** (newest / oldest /
  most-available / cheapest / most-made); a single available batch auto-selects.
- **Image crop upgrades.** The logo crop dialog (wheel/pinch zoom, drag, rule-of-thirds
  grid, Fit) is now **also used for product and category image uploads** (square) — same
  framing tools everywhere. The **initial crop auto-centers on the image content** (so a
  logo with lopsided whitespace padding starts framed, not off-center). **Transparent
  images** get a **Background** option in the dialog: kept transparent by default, or
  flattened to white / black / a custom color (better for printed thermal receipts). A
  **circle crop** shows a **non-blocking warning** when content would be clipped in the
  corners. All client-side — logos/images still store the same way (base64).

---

## While still developing v1 (current phase)

We stay on **v1 / 1.0.0** — don't bump the version or add a v2 entry yet. When you
add a feature, just add its new tables/columns to
[`../schema.sql`](../schema.sql). Existing v1 databases catch up to the new
structure **without a migration**:

- **Verify & build** (Settings → *Advanced Settings*) and the **automatic check
  on switching / restoring a connection** add any missing **tables** *and* any
  missing **columns** (additively — existing data is never touched).
- This works on both MariaDB and MySQL (column presence is checked via
  `information_schema`, not the MariaDB-only `ADD COLUMN IF NOT EXISTS`).

So the v1 dev loop is: edit `schema.sql` → click **Verify & build** on any older
v1 database (or just switch/restore into it) → it gains the new tables/columns.

---

## How to add the next version

1. Add the new tables/columns to [`../schema.sql`](../schema.sql) (for fresh
   installs).
2. Add an entry in [`registry.php`](registry.php) keyed by the new integer
   version, with the same changes written as **idempotent** `up` SQL (for
   existing/older databases catching up).
3. Bump `Version::SCHEMA` (and `Version::APP`) in
   [`../src/Version.php`](../src/Version.php).
4. Add a `## vN — x.y.z (date)` section here describing what changed.

> Keep `up` SQL safe to re-run: `CREATE TABLE IF NOT EXISTS …`, and guard column
> adds (`ADD COLUMN IF NOT EXISTS` on MariaDB). A fresh install gets everything
> from `schema.sql` and is tagged at the code version, so its migrations never
> run; only older databases replay them.
