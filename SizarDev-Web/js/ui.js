/* ==========================================================================
   Sizar Phones — Shared UI Utilities (Language/RTL, Currency, Toasts, Page Renderers)
   ========================================================================== */

(function () {
  const LANG_KEY = "sizar_lang";
  let memoryLang =
    (window.SIZAR_CONFIG && window.SIZAR_CONFIG.defaultLang) || "en";

  try {
    const saved = localStorage.getItem(LANG_KEY);
    if (saved === "ar" || saved === "en") {
      memoryLang = saved;
    }
  } catch (_) {}

  function getLang() {
    try {
      const saved = localStorage.getItem(LANG_KEY);
      if (saved === "ar" || saved === "en") {
        memoryLang = saved;
      }
    } catch (_) {}
    return memoryLang;
  }

  function setLang(lang) {
    const next = lang === "ar" ? "ar" : "en";
    memoryLang = next;
    try {
      localStorage.setItem(LANG_KEY, next);
    } catch (_) {}
    applyLangAttributes(next);
    translateStaticNodes(next);
    window.dispatchEvent(
      new CustomEvent("sizar:langchange", { detail: { lang: next } })
    );
  }

  function applyLangAttributes(lang) {
    const root = document.documentElement;
    root.lang = lang;
    root.dir = lang === "ar" ? "rtl" : "ltr";
  }

  function t(key) {
    const lang = getLang();
    const dict =
      (window.SIZAR_I18N && window.SIZAR_I18N[lang]) || window.SIZAR_I18N.en;
    return dict[key] !== undefined ? dict[key] : key;
  }

  function pick(localizedObj) {
    if (!localizedObj) return "";
    if (typeof localizedObj === "string") return localizedObj;
    const lang = getLang();
    return localizedObj[lang] || localizedObj.en || "";
  }

  function formatPrice(amount) {
    const lang = getLang();
    const num = Number(amount) || 0;
    const formatted = num.toLocaleString("en-US");
    return lang === "ar" ? `${formatted} د.ج` : `DZD ${formatted}`;
  }

  function translateStaticNodes(lang) {
    const currentLang = lang || getLang();
    document.querySelectorAll("[data-i18n]").forEach((el) => {
      const key = el.getAttribute("data-i18n");
      const val = t(key);
      if (val) el.textContent = val;
    });
    document.querySelectorAll("[data-i18n-placeholder]").forEach((el) => {
      const key = el.getAttribute("data-i18n-placeholder");
      const val = t(key);
      if (val) el.setAttribute("placeholder", val);
    });
    document.querySelectorAll("[data-i18n-aria]").forEach((el) => {
      const key = el.getAttribute("data-i18n-aria");
      const val = t(key);
      if (val) el.setAttribute("aria-label", val);
    });
    document.querySelectorAll("[data-lang-toggle]").forEach((btn) => {
      btn.textContent = currentLang === "ar" ? "EN" : "عربي";
      btn.setAttribute(
        "aria-label",
        currentLang === "ar"
          ? "Switch language to English"
          : "تغيير اللغة إلى العربية"
      );
    });
  }

  /* Non-blocking Toast */
  let toastTimeout = null;
  function showToast(message) {
    let region = document.getElementById("sizar-toast-region");
    if (!region) {
      region = document.createElement("div");
      region.id = "sizar-toast-region";
      region.className = "toast-region";
      region.setAttribute("role", "status");
      region.setAttribute("aria-live", "polite");
      document.body.appendChild(region);
    }
    region.innerHTML = `
      <div class="toast-pill" id="sizar-active-toast">
        <span class="toast-dot" aria-hidden="true"></span>
        <span>${message}</span>
      </div>
    `;
    const pill = document.getElementById("sizar-active-toast");
    requestAnimationFrame(() => {
      if (pill) pill.classList.add("is-visible");
    });
    if (toastTimeout) clearTimeout(toastTimeout);
    toastTimeout = setTimeout(() => {
      if (pill) pill.classList.remove("is-visible");
    }, 3400);
  }

  /* Page Controllers for Categories, Products, PDP, Services, Account */
  function renderCategoriesPage() {
    const grid = document.getElementById("categories-grid");
    if (!grid || !window.SIZAR_CATEGORIES) return;
    const products = window.SIZAR_PRODUCTS || [];
    grid.innerHTML = window.SIZAR_CATEGORIES.map((cat) => {
      const count = products.filter((p) => p.category === cat.id).length;
      return `
        <a href="products.html?category=${encodeURIComponent(cat.id)}" class="surface-card surface-card-interactive category-card" data-route-link="products.html?category=${encodeURIComponent(cat.id)}">
          <div>
            <div class="category-card-art" aria-hidden="true">${cat.icon}</div>
            <h2 class="category-card-title">${pick(cat.name)}</h2>
            <p class="body-prose">${pick(cat.subtitle)}</p>
          </div>
          <div class="category-card-meta">
            <span class="category-card-count">${count} ${t("itemsCountSuffix")}</span>
            <span class="category-card-arrow" aria-hidden="true">
              <span class="chevron-dir">›</span>
            </span>
          </div>
        </a>
      `;
    }).join("");
  }

  function renderProductsPage() {
    const grid = document.getElementById("products-grid");
    const chipsContainer = document.getElementById("category-filter-chips");
    const sortSelect = document.getElementById("catalog-sort-select");
    if (!grid || !window.SIZAR_PRODUCTS) return;

    const params = new URLSearchParams(window.location.search);
    let activeCategory =
      (window.SIZAR_ACTIVE_CATEGORY !== undefined
        ? window.SIZAR_ACTIVE_CATEGORY
        : params.get("category")) || "all";
    if (
      activeCategory !== "all" &&
      !window.SIZAR_CATEGORIES.some((c) => c.id === activeCategory)
    ) {
      activeCategory = "all";
    }
    let activeSort = (sortSelect && sortSelect.value) || "featured";

    function updateChips() {
      if (!chipsContainer) return;
      const allChip = `
        <button type="button" class="chip ${activeCategory === "all" ? "is-active" : ""}" aria-pressed="${activeCategory === "all"}" data-cat-chip="all">
          ${t("filterAll")}
        </button>
      `;
      const catChips = window.SIZAR_CATEGORIES.map((c) => {
        const isAct = activeCategory === c.id;
        return `
          <button type="button" class="chip ${isAct ? "is-active" : ""}" aria-pressed="${isAct}" data-cat-chip="${c.id}">
            ${pick(c.name)}
          </button>
        `;
      }).join("");
      chipsContainer.innerHTML = allChip + catChips;
    }

    function updateGrid() {
      let list = window.SIZAR_PRODUCTS.slice();
      if (activeCategory !== "all") {
        list = list.filter((p) => p.category === activeCategory);
      }
      if (activeSort === "price-asc") {
        list.sort((a, b) => a.price - b.price);
      } else if (activeSort === "price-desc") {
        list.sort((a, b) => b.price - a.price);
      } else if (activeSort === "name-asc") {
        list.sort((a, b) => pick(a.name).localeCompare(pick(b.name)));
      }

      const catMap = {};
      window.SIZAR_CATEGORIES.forEach((c) => {
        catMap[c.id] = pick(c.name);
      });

      grid.innerHTML = list
        .map(
          (p) => `
        <article class="surface-card surface-card-interactive product-card">
          <a href="product.html?id=${encodeURIComponent(p.id)}" class="product-card-link" data-route-link="product.html?id=${encodeURIComponent(p.id)}">
            <div class="product-tile-visual">
              <img src="${p.image}" alt="${pick(p.name)}" loading="lazy" width="540" height="500">
            </div>
            <div class="product-card-body">
              <span class="product-card-category">${catMap[p.category] || p.category}</span>
              <h2 class="product-card-title">${pick(p.name)}</h2>
            </div>
          </a>
          <div class="product-card-footer">
            <span class="product-card-price">${formatPrice(p.price)}</span>
            <button type="button" class="btn btn-primary btn-sm" data-quick-add="${p.id}">
              ${t("addToCart")}
            </button>
          </div>
        </article>
      `
        )
        .join("");
    }

    updateChips();
    updateGrid();

    if (chipsContainer && !chipsContainer.dataset.bound) {
      chipsContainer.dataset.bound = "true";
      chipsContainer.addEventListener("click", (e) => {
        const btn = e.target.closest("[data-cat-chip]");
        if (!btn) return;
        activeCategory = btn.getAttribute("data-cat-chip");
        window.SIZAR_ACTIVE_CATEGORY = activeCategory;
        try {
          const url = new URL(window.location.href);
          if (activeCategory === "all") url.searchParams.delete("category");
          else url.searchParams.set("category", activeCategory);
          window.history.replaceState({}, "", url.toString());
        } catch (_) {}
        updateChips();
        updateGrid();
      });
    }

    if (sortSelect && !sortSelect.dataset.bound) {
      sortSelect.dataset.bound = "true";
      sortSelect.addEventListener("change", () => {
        activeSort = sortSelect.value;
        updateGrid();
      });
    }
  }

  function renderProductDetailPage() {
    const container = document.getElementById("pdp-mount");
    if (!container || !window.SIZAR_PRODUCTS) return;

    const params = new URLSearchParams(window.location.search);
    const id =
      window.SIZAR_ACTIVE_PRODUCT_ID ||
      params.get("id") ||
      window.SIZAR_PRODUCTS[0].id;
    const product =
      window.SIZAR_PRODUCTS.find((p) => p.id === id) || window.SIZAR_PRODUCTS[0];

    const colors = (product.variants && product.variants.colors) || [];
    const storages = (product.variants && product.variants.storage) || [];
    let selectedColorIdx = 0;
    let selectedStorageIdx = 0;
    let qty = 1;

    const gallery =
      product.gallery && product.gallery.length
        ? product.gallery
        : [product.image];

    const catObj = window.SIZAR_CATEGORIES.find(
      (c) => c.id === product.category
    );
    const related = window.SIZAR_PRODUCTS.filter(
      (p) => p.id !== product.id && p.category === product.category
    ).slice(0, 3);

    function draw() {
      const colorName = colors[selectedColorIdx]
        ? pick(colors[selectedColorIdx])
        : "";
      const storageName = storages[selectedStorageIdx] || "";

      container.innerHTML = `
        <div style="margin-block-end: var(--space-4);">
          <a href="products.html?category=${encodeURIComponent(product.category)}" class="text-link" data-route-link="products.html?category=${encodeURIComponent(product.category)}">
            <span class="chevron-dir" aria-hidden="true">‹</span>
            <span>${t("pdpBackToCatalog")}</span>
          </a>
        </div>

        <div class="pdp-layout">
          <div class="pdp-gallery-wrap">
            <div class="pdp-gallery-track" id="pdp-gallery-track" tabindex="0" aria-label="${pick(product.name)} gallery">
              ${gallery
                .map(
                  (imgSrc, idx) => `
                <div class="pdp-slide" data-slide-index="${idx}">
                  <img src="${imgSrc}" alt="${pick(product.name)} - ${idx + 1}" width="540" height="500">
                </div>
              `
                )
                .join("")}
            </div>
            ${
              gallery.length > 1
                ? `<div class="pdp-gallery-controls" role="tablist" aria-label="Gallery slides">
                    ${gallery
                      .map(
                        (_, idx) => `
                      <button type="button" class="gallery-dot" role="tab" aria-selected="${idx === 0}" aria-label="Slide ${idx + 1}" data-gallery-dot="${idx}"></button>
                    `
                      )
                      .join("")}
                  </div>`
                : ""
            }
          </div>

          <div class="pdp-info">
            <div>
              <span class="eyebrow">${catObj ? pick(catObj.name) : product.category}</span>
              <h1 class="headline-lg">${pick(product.name)}</h1>
            </div>

            <div class="pdp-price">${formatPrice(product.price)}</div>
            <p class="body-prose">${pick(product.description)}</p>

            ${
              colors.length
                ? `
              <div class="pdp-option-group">
                <span class="pdp-option-label">${t("pdpColorLabel")}: <strong style="color: var(--text)">${colorName}</strong></span>
                <div class="chip-row">
                  ${colors
                    .map(
                      (c, idx) => `
                    <button type="button" class="chip ${idx === selectedColorIdx ? "is-active" : ""}" aria-pressed="${idx === selectedColorIdx}" data-color-idx="${idx}">
                      ${pick(c)}
                    </button>
                  `
                    )
                    .join("")}
                </div>
              </div>
            `
                : ""
            }

            ${
              storages.length
                ? `
              <div class="pdp-option-group">
                <span class="pdp-option-label">${t("pdpStorageLabel")}: <strong style="color: var(--text)">${storageName}</strong></span>
                <div class="chip-row">
                  ${storages
                    .map(
                      (s, idx) => `
                    <button type="button" class="chip ${idx === selectedStorageIdx ? "is-active" : ""}" aria-pressed="${idx === selectedStorageIdx}" data-storage-idx="${idx}">
                      ${s}
                    </button>
                  `
                    )
                    .join("")}
                </div>
              </div>
            `
                : ""
            }

            <div class="pdp-option-group">
              <span class="pdp-option-label">${t("pdpQtyLabel")}</span>
              <div class="pdp-purchase-row">
                <div class="qty-stepper">
                  <button type="button" class="qty-btn" id="pdp-qty-minus" aria-label="Decrease quantity">−</button>
                  <span class="qty-value" id="pdp-qty-val">${qty}</span>
                  <button type="button" class="qty-btn" id="pdp-qty-plus" aria-label="Increase quantity">+</button>
                </div>
                <button type="button" class="btn btn-primary" id="pdp-add-btn" style="flex: 1 1 220px;">
                  ${t("addToCart")} · ${formatPrice(product.price * qty)}
                </button>
              </div>
              <span style="font-size: var(--text-xs); color: var(--success); margin-block-start: var(--space-1);">
                ● ${t("pdpInStock")}
              </span>
            </div>

            <div class="pdp-specs-list">
              <h2 style="font-size: var(--text-sm); font-weight: 600; padding-block: var(--space-3); color: var(--text);">
                ${t("pdpSpecsHeading")}
              </h2>
              ${(product.specs || [])
                .map(
                  (s) => `
                <div class="pdp-spec-row">
                  <span class="pdp-spec-key">${pick(s.k)}</span>
                  <span class="pdp-spec-val">${pick(s.v)}</span>
                </div>
              `
                )
                .join("")}
            </div>
          </div>
        </div>

        ${
          related.length
            ? `
          <section style="padding-block-start: var(--space-12); border-block-start: 1px solid var(--hairline);">
            <h2 class="headline-md" style="margin-block-end: var(--space-8);">${t("pdpRelatedHeading")}</h2>
            <div class="products-grid">
              ${related
                .map(
                  (rp) => `
                <article class="surface-card surface-card-interactive product-card">
                  <a href="product.html?id=${encodeURIComponent(rp.id)}" class="product-card-link" data-route-link="product.html?id=${encodeURIComponent(rp.id)}">
                    <div class="product-tile-visual">
                      <img src="${rp.image}" alt="${pick(rp.name)}" loading="lazy" width="540" height="500">
                    </div>
                    <div class="product-card-body">
                      <h3 class="product-card-title">${pick(rp.name)}</h3>
                    </div>
                  </a>
                  <div class="product-card-footer">
                    <span class="product-card-price">${formatPrice(rp.price)}</span>
                    <button type="button" class="btn btn-primary btn-sm" data-quick-add="${rp.id}">
                      ${t("addToCart")}
                    </button>
                  </div>
                </article>
              `
                )
                .join("")}
            </div>
          </section>
        `
            : ""
        }
      `;

      // Bind gallery dots
      const track = document.getElementById("pdp-gallery-track");
      const dots = container.querySelectorAll("[data-gallery-dot]");
      dots.forEach((dot) => {
        dot.addEventListener("click", () => {
          const idx = Number(dot.getAttribute("data-gallery-dot"));
          if (track) {
            track.scrollTo({
              left: idx * track.clientWidth * (getLang() === "ar" ? -1 : 1),
              behavior: "smooth"
            });
          }
          dots.forEach((d, i) =>
            d.setAttribute("aria-selected", String(i === idx))
          );
        });
      });
      if (track && dots.length) {
        track.addEventListener(
          "scroll",
          () => {
            const idx = Math.round(
              Math.abs(track.scrollLeft) / Math.max(1, track.clientWidth)
            );
            dots.forEach((d, i) =>
              d.setAttribute("aria-selected", String(i === idx))
            );
          },
          { passive: true }
        );
      }

      // Bind color & storage chips
      container.querySelectorAll("[data-color-idx]").forEach((btn) => {
        btn.addEventListener("click", () => {
          selectedColorIdx = Number(btn.getAttribute("data-color-idx"));
          draw();
        });
      });
      container.querySelectorAll("[data-storage-idx]").forEach((btn) => {
        btn.addEventListener("click", () => {
          selectedStorageIdx = Number(btn.getAttribute("data-storage-idx"));
          draw();
        });
      });

      const minusBtn = document.getElementById("pdp-qty-minus");
      const plusBtn = document.getElementById("pdp-qty-plus");
      const addBtn = document.getElementById("pdp-add-btn");

      if (minusBtn) {
        minusBtn.addEventListener("click", () => {
          if (qty > 1) {
            qty -= 1;
            draw();
          }
        });
      }
      if (plusBtn) {
        plusBtn.addEventListener("click", () => {
          if (qty < 10) {
            qty += 1;
            draw();
          }
        });
      }
      if (addBtn) {
        addBtn.addEventListener("click", () => {
          const variantParts = [];
          if (colors[selectedColorIdx])
            variantParts.push(pick(colors[selectedColorIdx]));
          if (storages[selectedStorageIdx])
            variantParts.push(storages[selectedStorageIdx]);
          if (window.SizarCart) {
            window.SizarCart.addItem(
              product.id,
              qty,
              variantParts.join(" · ")
            );
          }
        });
      }
    }

    draw();
  }

  function renderServicesPage() {
    const grid = document.getElementById("services-grid");
    if (!grid || !window.SIZAR_SERVICES) return;
    const contactUrl =
      (window.SIZAR_CONFIG && window.SIZAR_CONFIG.contactUrl) || "#contact";

    grid.innerHTML = window.SIZAR_SERVICES.map(
      (srv) => `
      <article class="surface-card service-card">
        <div style="display: flex; flex-direction: column; gap: var(--space-4);">
          <div class="service-icon-box" aria-hidden="true">${srv.icon}</div>
          <div>
            <span class="eyebrow" style="margin-block-end: var(--space-1);">${pick(srv.turnaround)}</span>
            <h2 class="headline-sm">${pick(srv.title)}</h2>
          </div>
          <p class="body-prose">${pick(srv.description)}</p>
        </div>
        <div class="service-card-footer">
          <div class="service-price-tag">
            <span class="service-price-from">${t("srvFrom")}</span>
            <span class="service-price-val">${formatPrice(srv.priceFrom)}</span>
          </div>
          <a href="${contactUrl}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary btn-sm" data-service-contact="${srv.id}">
            ${t("srvContactBtn")}
          </a>
        </div>
      </article>
    `
    ).join("");
  }

  function initAccountPage() {
    const form = document.getElementById("account-auth-form");
    const oauthBtns = document.querySelectorAll("[data-oauth-btn]");
    const handleAuthAttempt = (e) => {
      if (e) e.preventDefault();
      if (!window.AUTH_ENABLED) {
        showToast(t("authDisabledToast"));
      }
    };
    if (form && !form.dataset.bound) {
      form.dataset.bound = "true";
      form.addEventListener("submit", handleAuthAttempt);
    }
    oauthBtns.forEach((btn) => {
      if (!btn.dataset.bound) {
        btn.dataset.bound = "true";
        btn.addEventListener("click", handleAuthAttempt);
      }
    });
  }

  function refreshAllViews() {
    translateStaticNodes(getLang());
    renderCategoriesPage();
    renderProductsPage();
    renderProductDetailPage();
    renderServicesPage();
    initAccountPage();
    if (window.SizarCart && window.SizarCart.renderAll) {
      window.SizarCart.renderAll();
    }
  }

  // Global delegated handler for quick-add, service contact, and language toggle
  document.addEventListener("click", (e) => {
    const langBtn = e.target.closest("[data-lang-toggle]");
    if (langBtn) {
      e.preventDefault();
      setLang(getLang() === "ar" ? "en" : "ar");
      return;
    }

    const srvBtn = e.target.closest("[data-service-contact]");
    if (srvBtn) {
      // Show helpful toast in prototype mode while also allowing link
      showToast(t("srvContactToast"));
    }

    const quickAddBtn = e.target.closest("[data-quick-add]");
    if (quickAddBtn) {
      e.preventDefault();
      const prodId = quickAddBtn.getAttribute("data-quick-add");
      const prod = (window.SIZAR_PRODUCTS || []).find((p) => p.id === prodId);
      if (prod && window.SizarCart) {
        const defaultColor =
          prod.variants && prod.variants.colors && prod.variants.colors[0]
            ? pick(prod.variants.colors[0])
            : "";
        const defaultStorage =
          prod.variants && prod.variants.storage && prod.variants.storage[0]
            ? prod.variants.storage[0]
            : "";
        const variantLabel = [defaultColor, defaultStorage]
          .filter(Boolean)
          .join(" · ");
        window.SizarCart.addItem(prod.id, 1, variantLabel);
      }
    }
  });

  window.addEventListener("sizar:langchange", () => {
    refreshAllViews();
  });

  document.addEventListener("DOMContentLoaded", () => {
    applyLangAttributes(getLang());
    refreshAllViews();
  });

  window.SizarUI = {
    getLang,
    setLang,
    t,
    pick,
    formatPrice,
    showToast,
    refreshAllViews
  };
})();
