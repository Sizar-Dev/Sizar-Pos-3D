# Sizar Phones — E-Commerce & Repair Lab Prototype

A minimal, dark, Apple-inspired front-end prototype for **Sizar Phones** (`سيزار فونز`), built with plain HTML, CSS, and JavaScript (no framework, no build step, no npm).

- **Tagline (EN):** *"Precision repair. Considered devices."*
- **Tagline (AR):** *"صيانة دقيقة. أجهزة مختارة بعناية."*
- **Languages:** English (`ltr`) + Arabic (`rtl`) via CSS logical properties and live switcher in the top glass navigation bar.
- **Currency:** `DZD` (`د.ج`).

---

## 1. How to Run Locally

Because the home page preloads 144 `.webp` frames (`frames/frame_0001.webp` … `frames/frame_0144.webp`) and uses standard static assets, serve the project root with any static HTTP server:

### Python 3 (built-in)
```bash
python3 -m http.server 8080
```
Then open `http://localhost:8080` in your browser.

### Node.js (`npx serve`)
```bash
npx serve -l 8080 .
```

### PHP (built-in)
```bash
php -S localhost:8080
```

---

## 2. Project Structure

```text
.
├── index.html          # Minimal home page with loader + 500svh pinned 144-frame scroll stage
├── categories.html     # 6 hardware & accessory category cards
├── products.html       # Filterable, sortable catalog of 16 products
├── product.html        # Swipeable gallery, finish/storage chips, quantity, specs & related items
├── services.html       # 6 component-level repair service cards with DZD pricing & booking link
├── cart.html           # Full shopping bag page synced with the slide-in glass cart drawer
├── account.html        # Combined "Sign in or create account" page gated by AUTH_ENABLED = false
├── css/
│   ├── tokens.css      # CSS custom properties (--bg #000, --surface #111113, --accent #0071e3, etc.)
│   ├── base.css        # Reset, fluid clamp() typography, logical RTL utilities, focus rings
│   ├── components.css  # Sticky glass pill nav, mobile menu, pill buttons, cart drawer, toasts
│   └── pages.css       # Page layouts, mobile canvas band, PDP gallery, auth & service grids
├── js/
│   ├── ui.js           # Bilingual EN/AR state, DZD formatter, toasts, and page controllers
│   ├── cart.js         # localStorage cart state, live badge, drawer & cart.html rendering
│   ├── nav.js          # Shared floating glass nav, mobile overlay & footer injection
│   └── hero.js         # Frame preloader (concurrency 8 + Image.decode), GSAP + ScrollTrigger + Lenis
├── data/
│   └── products.js     # Store config, 6 categories, 16 mock products, 6 repair services & i18n strings
└── frames/
    └── frame_0001.webp … frame_0144.webp
```

---

## 3. Where to Customize Store Name, Currency, Copy & Product Photos

All brand configuration, mock products, repair services, and bilingual copy live in **`data/products.js`**:

1. **Store Name, Tagline, Currency & Contact URL:**
   Edit `window.SIZAR_CONFIG` at the top of `data/products.js`:
   ```js
   window.SIZAR_CONFIG = {
     storeName: { en: "Sizar Phones", ar: "سيزار فونز" },
     tagline: {
       en: "Precision repair. Considered devices.",
       ar: "صيانة دقيقة. أجهزة مختارة بعناية."
     },
     currency: "DZD",
     contactUrl: "https://wa.me/213550000000",
     defaultLang: "en"
   };
   ```
2. **Enabling Authentication Later:**
   Flip `window.AUTH_ENABLED = false;` at line 5 of `data/products.js` to `true` and connect your auth endpoint in `js/ui.js` (`initAccountPage`).
3. **Dropping in Real Product Photos:**
   In `window.SIZAR_PRODUCTS` (`data/products.js`), each product has an `image` string and a `gallery` array. Replace `createHardwareTile(...)` with your image path (e.g., `"assets/products/iphone-16-pro.webp"`).
4. **Editing Bilingual Copy (EN / AR):**
   Update `window.SIZAR_I18N.en` and `window.SIZAR_I18N.ar` at the bottom of `data/products.js`.


## 3D Interactive Store (`shopping-3d.html`)
- Linked across all pages via **Shop in 3D** (`تسوّق 3D`) in the desktop floating pill navigation (with an ultra-subtle Apple-inspired ambient breathing glow) and as the first lightweight link above **Products** in the mobile menu.
- Features open-top 3D Wheeled Shopping Carts and Hand Baskets with real-time 3D item drop-in animations, forced landscape mode on mobile phones, and live bag synchronization via `localStorage["sizar_cart_v1"]`.
