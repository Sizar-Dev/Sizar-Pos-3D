/* ==========================================================================
   Sizar Phones — Shared Floating Glass Navigation, Mobile Overlay & Cart Drawer Injection
   ========================================================================== */

(function () {
  function getCurrentPageName() {
    const path = window.location.pathname;
    const file = path.split("/").pop() || "index.html";
    return file;
  }

  function injectSharedChrome() {
    const headerMount = document.getElementById("site-header-mount");
    const currentPage = getCurrentPageName();

    if (headerMount) {
      headerMount.innerHTML = `
        <a href="#main-content" class="skip-link" data-i18n="skipToContent">Skip to content</a>
        <header class="site-header" role="banner">
          <nav class="nav-pill" aria-label="Primary">
            <a href="index.html" class="nav-brand" data-route-link="index.html">
              <span class="nav-brand-dot" aria-hidden="true"></span>
              <span>Sizar Phones</span>
            </a>

            <div class="nav-links">
              <a href="products.html" class="nav-link" ${currentPage === "products.html" || currentPage === "product.html" ? 'aria-current="page"' : ""} data-i18n="navProducts" data-route-link="products.html">Products</a>
              <a href="categories.html" class="nav-link" ${currentPage === "categories.html" ? 'aria-current="page"' : ""} data-i18n="navCategories" data-route-link="categories.html">Categories</a>
              <a href="services.html" class="nav-link" ${currentPage === "services.html" ? 'aria-current="page"' : ""} data-i18n="navServices" data-route-link="services.html">Services</a>
              <a href="shopping-3d.html" class="nav-link nav-link-3d" ${currentPage === "shopping-3d.html" ? 'aria-current="page"' : ""} data-route-link="shopping-3d.html">
                <span class="nav-3d-sparkle" aria-hidden="true">
                  <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2L14.15 9.85L22 12L14.15 14.15L12 22L9.85 14.15L2 12L9.85 9.85L12 2Z"></path>
                  </svg>
                </span>
                <span data-i18n="navShop3D">Shop in 3D</span>
              </a>
            </div>

            <div class="nav-actions">
              <button type="button" class="lang-switch-btn" data-lang-toggle="true" aria-label="Switch language">عربي</button>

              <button type="button" class="nav-icon-btn" data-open-cart="true" data-i18n-aria="navCartLabel" aria-label="Shopping bag">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
                <span class="cart-badge" data-cart-badge hidden>0</span>
              </button>

              <a href="account.html" class="nav-signin-pill" ${currentPage === "account.html" ? 'aria-current="page"' : ""} data-i18n="navSignIn" data-route-link="account.html">Sign in</a>

              <button type="button" class="nav-icon-btn nav-menu-toggle" id="mobile-menu-open-btn" data-i18n-aria="navMenuLabel" aria-label="Menu" aria-expanded="false" aria-controls="mobile-glass-menu">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                  <line x1="4" y1="8" x2="20" y2="8"></line>
                  <line x1="4" y1="16" x2="20" y2="16"></line>
                </svg>
              </button>
            </div>
          </nav>
        </header>

        <!-- Full-Screen Mobile Glass Menu -->
        <div class="mobile-menu-overlay" id="mobile-glass-menu" role="dialog" aria-modal="true" aria-label="Site navigation" aria-hidden="true">
          <div class="mobile-menu-header">
            <a href="index.html" class="nav-brand" data-route-link="index.html">
              <span class="nav-brand-dot" aria-hidden="true"></span>
              <span>Sizar Phones</span>
            </a>
            <button type="button" class="nav-icon-btn" id="mobile-menu-close-btn" data-i18n-aria="navCloseLabel" aria-label="Close">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
          </div>

          <div class="mobile-menu-links">
            <a href="shopping-3d.html" class="mobile-menu-link mobile-menu-link-3d" data-route-link="shopping-3d.html">
              <span class="mobile-menu-link-3d-label" data-i18n="navShop3D">Shop in 3D</span>
              <span class="chevron-dir" aria-hidden="true">›</span>
            </a>
            <a href="products.html" class="mobile-menu-link" data-route-link="products.html">
              <span data-i18n="navProducts">Products</span>
              <span class="chevron-dir" aria-hidden="true">›</span>
            </a>
            <a href="categories.html" class="mobile-menu-link" data-route-link="categories.html">
              <span data-i18n="navCategories">Categories</span>
              <span class="chevron-dir" aria-hidden="true">›</span>
            </a>
            <a href="services.html" class="mobile-menu-link" data-route-link="services.html">
              <span data-i18n="navServices">Services</span>
              <span class="chevron-dir" aria-hidden="true">›</span>
            </a>
            <a href="cart.html" class="mobile-menu-link" data-route-link="cart.html">
              <span data-i18n="cartTitle">Your Bag</span>
              <span class="chevron-dir" aria-hidden="true">›</span>
            </a>
          </div>

          <div class="mobile-menu-footer">
            <a href="account.html" class="btn btn-primary btn-block" data-i18n="navSignIn" data-route-link="account.html">Sign in</a>
          </div>
        </div>
      `;
    }

    // Inject Slide-in Cart Drawer if not present
    if (!document.getElementById("sizar-cart-drawer")) {
      const drawerWrap = document.createElement("div");
      drawerWrap.innerHTML = `
        <div class="drawer-backdrop" id="sizar-cart-backdrop" aria-hidden="true"></div>
        <aside class="cart-drawer" id="sizar-cart-drawer" role="dialog" aria-modal="true" aria-labelledby="sizar-cart-drawer-title" aria-hidden="true">
          <div class="cart-drawer-header">
            <h2 class="cart-drawer-title" id="sizar-cart-drawer-title">Your Bag</h2>
            <button type="button" class="nav-icon-btn" data-close-cart="true" data-i18n-aria="navCloseLabel" aria-label="Close">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
          </div>
          <div class="cart-drawer-body" id="sizar-cart-drawer-body"></div>
          <div class="cart-drawer-footer" id="sizar-cart-drawer-footer"></div>
        </aside>
      `;
      document.body.appendChild(drawerWrap);
    }

    // Inject Shared Footer if mount exists
    const footerMount = document.getElementById("site-footer-mount");
    if (footerMount) {
      footerMount.innerHTML = `
        <footer class="site-footer" role="contentinfo">
          <div class="container footer-inner">
            <span data-i18n="footerCopy">© 2026 Sizar Phones. Precision repair & curated hardware.</span>
            <div class="footer-links">
              <a href="shopping-3d.html" data-i18n="navShop3D" data-route-link="shopping-3d.html">Shop in 3D</a>
              <a href="products.html" data-i18n="navProducts" data-route-link="products.html">Products</a>
              <a href="categories.html" data-i18n="navCategories" data-route-link="categories.html">Categories</a>
              <a href="services.html" data-i18n="navServices" data-route-link="services.html">Services</a>
              <a href="account.html" data-i18n="navSignIn" data-route-link="account.html">Sign in</a>
            </div>
          </div>
        </footer>
      `;
    }

    // Bind mobile menu toggle
    const openMenuBtn = document.getElementById("mobile-menu-open-btn");
    const closeMenuBtn = document.getElementById("mobile-menu-close-btn");
    const mobileMenu = document.getElementById("mobile-glass-menu");

    function setMobileMenu(open) {
      if (!mobileMenu || !openMenuBtn) return;
      mobileMenu.classList.toggle("is-open", open);
      mobileMenu.setAttribute("aria-hidden", String(!open));
      openMenuBtn.setAttribute("aria-expanded", String(open));
    }

    if (openMenuBtn) {
      openMenuBtn.addEventListener("click", () => setMobileMenu(true));
    }
    if (closeMenuBtn) {
      closeMenuBtn.addEventListener("click", () => setMobileMenu(false));
    }
    if (mobileMenu) {
      mobileMenu.addEventListener("click", (e) => {
        if (e.target.closest("a")) setMobileMenu(false);
      });
    }
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") setMobileMenu(false);
    });
  }

  document.addEventListener("DOMContentLoaded", () => {
    injectSharedChrome();
    if (window.SizarUI && window.SizarUI.refreshAllViews) {
      window.SizarUI.refreshAllViews();
    }
  });
})();
