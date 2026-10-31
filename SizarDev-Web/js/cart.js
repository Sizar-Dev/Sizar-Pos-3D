/* ==========================================================================
   Sizar Phones — Cart State Management, Slide-in Glass Drawer & cart.html
   ========================================================================== */

(function () {
  const STORAGE_KEY = "sizar_cart_v1";

  function loadCart() {
    try {
      const raw = localStorage.getItem(STORAGE_KEY);
      if (!raw) return [];
      const parsed = JSON.parse(raw);
      return Array.isArray(parsed) ? parsed : [];
    } catch (_) {
      return [];
    }
  }

  function saveCart(items) {
    try {
      localStorage.setItem(STORAGE_KEY, JSON.stringify(items));
    } catch (_) {}
  }

  let cartItems = loadCart();

  function getProduct(id) {
    return (window.SIZAR_PRODUCTS || []).find((p) => p.id === id) || null;
  }

  function getTotalCount() {
    return cartItems.reduce((sum, item) => sum + (Number(item.qty) || 0), 0);
  }

  function getSubtotal() {
    return cartItems.reduce((sum, item) => {
      const prod = getProduct(item.id);
      const price = prod ? prod.price : (Number(item.unitPrice) || 0);
      return sum + price * (Number(item.qty) || 1);
    }, 0);
  }

  function addItem(productId, qty, variant) {
    const prod = getProduct(productId);
    if (!prod) return;
    const cleanQty = Math.max(1, Number(qty) || 1);
    const cleanVariant = variant || "";
    const key = `${productId}__${cleanVariant}`;
    const existing = cartItems.find((item) => item.key === key);
    if (existing) {
      existing.qty = Math.min(20, existing.qty + cleanQty);
    } else {
      cartItems.push({
        key,
        id: productId,
        qty: cleanQty,
        variant: cleanVariant
      });
    }
    saveCart(cartItems);
    renderAll();
    if (window.SizarUI) {
      window.SizarUI.showToast(
        `${window.SizarUI.pick(prod.name)} — ${window.SizarUI.t("addedToast")}`
      );
    }
    openDrawer();
  }

  function updateQty(key, delta) {
    const idx = cartItems.findIndex((item) => item.key === key);
    if (idx === -1) return;
    const nextQty = cartItems[idx].qty + delta;
    if (nextQty <= 0) {
      cartItems.splice(idx, 1);
    } else {
      cartItems[idx].qty = Math.min(20, nextQty);
    }
    saveCart(cartItems);
    renderAll();
  }

  function removeItem(key) {
    cartItems = cartItems.filter((item) => item.key !== key);
    saveCart(cartItems);
    renderAll();
  }

  function openDrawer() {
    const drawer = document.getElementById("sizar-cart-drawer");
    const backdrop = document.getElementById("sizar-cart-backdrop");
    if (drawer && backdrop) {
      drawer.classList.add("is-open");
      backdrop.classList.add("is-open");
      drawer.setAttribute("aria-hidden", "false");
    }
  }

  function closeDrawer() {
    const drawer = document.getElementById("sizar-cart-drawer");
    const backdrop = document.getElementById("sizar-cart-backdrop");
    if (drawer && backdrop) {
      drawer.classList.remove("is-open");
      backdrop.classList.remove("is-open");
      drawer.setAttribute("aria-hidden", "true");
    }
  }

  function buildItemRowsMarkup() {
    const UI = window.SizarUI;
    if (!cartItems.length) {
      return `
        <div class="cart-empty-state">
          <p class="headline-sm">${UI ? UI.t("cartEmptyTitle") : "Your bag is empty."}</p>
          <p class="body-prose" style="font-size: var(--text-sm);">${UI ? UI.t("cartEmptySub") : ""}</p>
          <a href="products.html" class="btn btn-primary btn-sm" data-route-link="products.html">
            ${UI ? UI.t("ctaDiscoverProducts") : "Discover our products"}
          </a>
        </div>
      `;
    }

    return cartItems
      .map((item) => {
        const prod = getProduct(item.id);
        if (!prod) return "";
        const name = UI ? UI.pick(prod.name) : prod.name.en;
        const lineTotal = UI
          ? UI.formatPrice(prod.price * item.qty)
          : `DZD ${prod.price * item.qty}`;
        return `
        <div class="cart-item-row" data-cart-row="${item.key}">
          <a href="product.html?id=${encodeURIComponent(prod.id)}" class="cart-item-thumb" data-route-link="product.html?id=${encodeURIComponent(prod.id)}">
            <img src="${prod.image}" alt="${name}" width="72" height="72">
          </a>
          <div class="cart-item-info">
            <a href="product.html?id=${encodeURIComponent(prod.id)}" class="cart-item-title" data-route-link="product.html?id=${encodeURIComponent(prod.id)}">${name}</a>
            ${item.variant ? `<span class="cart-item-variant">${item.variant}</span>` : ""}
            <span class="cart-item-price">${lineTotal}</span>
            <div class="cart-item-controls">
              <div class="qty-stepper">
                <button type="button" class="qty-btn" data-cart-dec="${item.key}" aria-label="Decrease quantity">−</button>
                <span class="qty-value">${item.qty}</span>
                <button type="button" class="qty-btn" data-cart-inc="${item.key}" aria-label="Increase quantity">+</button>
              </div>
              <button type="button" class="remove-item-btn" data-cart-remove="${item.key}">
                ${UI ? UI.t("cartRemove") : "Remove"}
              </button>
            </div>
          </div>
        </div>
      `;
      })
      .join("");
  }

  function renderBadges() {
    const count = getTotalCount();
    document.querySelectorAll("[data-cart-badge]").forEach((badge) => {
      badge.textContent = String(count);
      if (count > 0) {
        badge.removeAttribute("hidden");
      } else {
        badge.setAttribute("hidden", "");
      }
    });
  }

  function renderDrawer() {
    const UI = window.SizarUI;
    const body = document.getElementById("sizar-cart-drawer-body");
    const footer = document.getElementById("sizar-cart-drawer-footer");
    const titleEl = document.getElementById("sizar-cart-drawer-title");
    if (titleEl && UI) {
      titleEl.textContent = `${UI.t("cartTitle")} (${getTotalCount()})`;
    }
    if (body) {
      body.innerHTML = buildItemRowsMarkup();
    }
    if (footer) {
      if (!cartItems.length) {
        footer.style.display = "none";
      } else {
        footer.style.display = "flex";
        const subtotalFormatted = UI
          ? UI.formatPrice(getSubtotal())
          : `DZD ${getSubtotal()}`;
        footer.innerHTML = `
          <div class="cart-subtotal-row">
            <span class="cart-subtotal-label">${UI ? UI.t("cartSubtotal") : "Subtotal"}</span>
            <span class="cart-subtotal-amount">${subtotalFormatted}</span>
          </div>
          <div style="display: flex; flex-direction: column; gap: var(--space-2);">
            <button type="button" class="btn btn-primary btn-block" data-checkout-action="true">
              ${UI ? UI.t("cartCheckoutBtn") : "Proceed to checkout"}
            </button>
            <a href="cart.html" class="btn btn-secondary btn-block btn-sm" data-route-link="cart.html">
              ${UI ? UI.t("cartViewFullBag") : "View full bag"}
            </a>
          </div>
        `;
      }
    }
  }

  function renderCartPage() {
    const mount = document.getElementById("cart-page-mount");
    if (!mount) return;
    const UI = window.SizarUI;
    if (!cartItems.length) {
      mount.innerHTML = `
        <div class="surface-card" style="padding: var(--space-12);">
          ${buildItemRowsMarkup()}
        </div>
      `;
      return;
    }

    const subtotalFormatted = UI
      ? UI.formatPrice(getSubtotal())
      : `DZD ${getSubtotal()}`;

    mount.innerHTML = `
      <div class="cart-page-grid">
        <div class="surface-card cart-page-list">
          ${buildItemRowsMarkup()}
        </div>
        <aside class="surface-card cart-summary-card" aria-label="Order summary">
          <h2 class="headline-sm">${UI ? UI.t("cartPageEyebrow") : "Summary"}</h2>
          <div style="display: flex; flex-direction: column; gap: var(--space-3); padding-block: var(--space-4); border-block: 1px solid var(--hairline);">
            <div style="display: flex; justify-content: space-between; font-size: var(--text-sm);">
              <span style="color: var(--text-2);">${UI ? UI.t("cartSubtotal") : "Subtotal"}</span>
              <span style="font-weight: 600;">${subtotalFormatted}</span>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: var(--text-sm);">
              <span style="color: var(--text-2);">${UI ? UI.t("cartShippingLabel") : "Shipping"}</span>
              <span style="color: var(--text-2);">${UI ? UI.t("cartShippingVal") : "Calculated at checkout"}</span>
            </div>
          </div>
          <div class="cart-subtotal-row">
            <span class="cart-subtotal-label">${UI ? UI.t("cartSubtotal") : "Total"}</span>
            <span class="cart-subtotal-amount">${subtotalFormatted}</span>
          </div>
          <button type="button" class="btn btn-primary btn-block" data-checkout-action="true">
            ${UI ? UI.t("cartCheckoutBtn") : "Proceed to checkout"}
          </button>
        </aside>
      </div>
    `;
  }

  function renderAll() {
    renderBadges();
    renderDrawer();
    renderCartPage();
  }

  // Event delegation for cart interactions
  document.addEventListener("click", (e) => {
    const openBtn = e.target.closest("[data-open-cart]");
    if (openBtn) {
      e.preventDefault();
      openDrawer();
      return;
    }

    const closeBtn = e.target.closest("[data-close-cart]");
    if (closeBtn || e.target.id === "sizar-cart-backdrop") {
      e.preventDefault();
      closeDrawer();
      return;
    }

    const incBtn = e.target.closest("[data-cart-inc]");
    if (incBtn) {
      updateQty(incBtn.getAttribute("data-cart-inc"), 1);
      return;
    }

    const decBtn = e.target.closest("[data-cart-dec]");
    if (decBtn) {
      updateQty(decBtn.getAttribute("data-cart-dec"), -1);
      return;
    }

    const remBtn = e.target.closest("[data-cart-remove]");
    if (remBtn) {
      removeItem(remBtn.getAttribute("data-cart-remove"));
      return;
    }

    const checkoutBtn = e.target.closest("[data-checkout-action]");
    if (checkoutBtn) {
      e.preventDefault();
      if (window.SizarUI) {
        window.SizarUI.showToast(window.SizarUI.t("cartDisabledToast"));
      }
    }
  });

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeDrawer();
    }
  });

  document.addEventListener("DOMContentLoaded", () => {
    renderAll();
  });

  window.SizarCart = {
    addItem,
    updateQty,
    removeItem,
    openDrawer,
    closeDrawer,
    renderAll,
    getTotalCount,
    getSubtotal
  };
})();
