/* ==========================================================================
   Sizar Phones — Pinned Scroll Animation, Concurrent Frame Preloader,
   Dynamic Corner-Pixel Sampler & GSAP ScrollTrigger + Lenis Integration
   ========================================================================== */

(function () {
  const TOTAL_FRAMES = 144;
  const CONCURRENCY_LIMIT = 8;
  const LERP_FACTOR = 0.12;

  function pad4(n) {
    return String(n).padStart(4, "0");
  }

  function getFrameSrc(oneBasedIndex) {
    if (
      window.SIZAR_INLINE_FRAMES &&
      window.SIZAR_INLINE_FRAMES[oneBasedIndex]
    ) {
      return window.SIZAR_INLINE_FRAMES[oneBasedIndex];
    }
    return `frames/frame_${pad4(oneBasedIndex)}.webp`;
  }

  function isLowMemoryOrMobile() {
    const narrow = window.matchMedia("(max-width: 768px)").matches;
    const lowRam =
      typeof navigator.deviceMemory === "number" &&
      navigator.deviceMemory <= 4;
    return narrow || lowRam;
  }

  function prefersReducedMotion() {
    return window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  }

  function sampleCornerPixelAndSyncBg(img) {
    try {
      const probe = document.createElement("canvas");
      probe.width = 1;
      probe.height = 1;
      const pCtx = probe.getContext("2d");
      if (!pCtx) return;
      // Sample bottom-left corner pixel (0, height - 1) which is pure black (0,0,0)
      pCtx.drawImage(img, 0, img.naturalHeight - 1, 1, 1, 0, 0, 1, 1);
      const data = pCtx.getImageData(0, 0, 1, 1).data;
      const hex =
        "#" +
        [data[0], data[1], data[2]]
          .map((c) => (c <= 2 ? 0 : c).toString(16).padStart(2, "0"))
          .join("");
      document.documentElement.style.setProperty("--bg", hex);
      document.body.style.backgroundColor = hex;
    } catch (_) {}
  }

  function initHeroScroll() {
    const canvas = document.getElementById("hero-canvas");
    const loader = document.getElementById("hero-loader");
    const loaderBar = document.getElementById("hero-loader-bar");
    const loaderPct = document.getElementById("hero-loader-pct");
    const track = document.getElementById("hero-scroll-track");
    const stageElements = Array.from(
      document.querySelectorAll(".hero-stage[data-stage]")
    );

    if (!canvas || !track) return;

    // Respect prefers-reduced-motion: disable Lenis & scrubbing
    if (prefersReducedMotion()) {
      if (loader) loader.classList.add("is-done");
      return;
    }

    const ctx = canvas.getContext("2d", { alpha: false });
    const step = isLowMemoryOrMobile() ? 2 : 1;
    const frameNumbers = [];
    for (let i = 1; i <= TOTAL_FRAMES; i += step) {
      frameNumbers.push(i);
    }
    if (frameNumbers[frameNumbers.length - 1] !== TOTAL_FRAMES) {
      frameNumbers.push(TOTAL_FRAMES);
    }

    const frameCount = frameNumbers.length;
    const frames = new Array(frameCount).fill(null);

    let naturalWidth = 0;
    let naturalHeight = 0;
    let targetIndex = 0;
    let currentIndex = 0;
    let lastDrawnIndex = -1;
    let isTabHidden = document.hidden;

    function sizeCanvas() {
      const container = canvas.parentElement || canvas;
      const rect = container.getBoundingClientRect();
      const isMobile = window.matchMedia("(max-width: 768px)").matches;
      const dprCap = isMobile ? 1.5 : 2;
      const dpr = Math.min(window.devicePixelRatio || 1, dprCap);

      const w = Math.max(1, Math.round(rect.width * dpr));
      const h = Math.max(1, Math.round(rect.height * dpr));

      if (canvas.width !== w || canvas.height !== h) {
        canvas.width = w;
        canvas.height = h;
        lastDrawnIndex = -1;
        drawFrame(Math.round(currentIndex));
      }
    }

    function findNearestLoadedFrame(idx) {
      if (frames[idx]) return frames[idx];
      for (let offset = 1; offset < frameCount; offset++) {
        if (idx - offset >= 0 && frames[idx - offset]) return frames[idx - offset];
        if (idx + offset < frameCount && frames[idx + offset]) return frames[idx + offset];
      }
      return null;
    }

    function drawFrame(intIndex) {
      const clamped = Math.max(0, Math.min(frameCount - 1, intIndex));
      const img = findNearestLoadedFrame(clamped);
      if (!img || !naturalWidth || !naturalHeight) return;

      const cw = canvas.width;
      const ch = canvas.height;
      ctx.fillStyle =
        getComputedStyle(document.documentElement)
          .getPropertyValue("--bg")
          .trim() || "#000000";
      ctx.fillRect(0, 0, cw, ch);

      // Fit with "contain"; never crop the phone
      const scale = Math.min(cw / naturalWidth, ch / naturalHeight);
      const drawW = naturalWidth * scale;
      const drawH = naturalHeight * scale;
      const dx = (cw - drawW) * 0.5;
      const dy = (ch - drawH) * 0.5;

      ctx.drawImage(img, dx, dy, drawW, drawH);
      lastDrawnIndex = clamped;
    }

    // Text stage envelopes:
    // 0: 0–15%
    // 1: 25–45%
    // 2: 50–72%
    // 3: 78–95%
    const stageRanges = [
      { start: 0.0, end: 0.15, isFirst: true },
      { start: 0.25, end: 0.45, isFirst: false },
      { start: 0.50, end: 0.72, isFirst: false },
      { start: 0.78, end: 0.95, isFirst: false }
    ];

    function updateTextStages(progress) {
      stageElements.forEach((el) => {
        const idx = Number(el.getAttribute("data-stage"));
        const range = stageRanges[idx];
        if (!range) return;

        const span = range.end - range.start;
        const fadeWindow = span * 0.24;
        let opacity = 0;
        let translateY = 18;
        let blurPx = 8;

        if (range.isFirst && progress <= range.start + fadeWindow) {
          opacity = 1;
          translateY = 0;
          blurPx = 0;
        } else if (progress >= range.start && progress <= range.end) {
          if (progress < range.start + fadeWindow) {
            const t = (progress - range.start) / fadeWindow;
            opacity = t;
            translateY = (1 - t) * 18;
            blurPx = (1 - t) * 8;
          } else if (progress > range.end - fadeWindow) {
            const t = (range.end - progress) / fadeWindow;
            opacity = t;
            translateY = -(1 - t) * 14;
            blurPx = (1 - t) * 6;
          } else {
            opacity = 1;
            translateY = 0;
            blurPx = 0;
          }
        } else {
          opacity = 0;
          translateY = progress < range.start ? 18 : -14;
          blurPx = 8;
        }

        el.style.opacity = opacity.toFixed(3);
        el.style.transform = `translate3d(0, ${translateY.toFixed(1)}px, 0)`;
        el.style.filter = blurPx > 0.2 ? `blur(${blurPx.toFixed(1)}px)` : "none";
      });
    }

    function loadSingleFrame(slotIdx) {
      return new Promise((resolve) => {
        const frameNum = frameNumbers[slotIdx];
        const img = new Image();
        img.decoding = "async";
        img.src = getFrameSrc(frameNum);

        const finalize = (loadedImg) => {
          if (loadedImg) {
            if (!naturalWidth || !naturalHeight) {
              naturalWidth = loadedImg.naturalWidth || 1920;
              naturalHeight = loadedImg.naturalHeight || 1080;
              sampleCornerPixelAndSyncBg(loadedImg);
            }
            frames[slotIdx] = loadedImg;
          }
          resolve();
        };

        img.onload = () => {
          if (typeof img.decode === "function") {
            img
              .decode()
              .then(() => finalize(img))
              .catch(() => finalize(img));
          } else {
            finalize(img);
          }
        };
        img.onerror = () => finalize(null);
      });
    }

    async function preloadAllFrames() {
      let loadedCount = 0;
      const updateProgress = () => {
        loadedCount += 1;
        const pct = Math.min(100, Math.round((loadedCount / frameCount) * 100));
        if (loaderBar) loaderBar.style.inlineSize = `${pct}%`;
        if (loaderPct) loaderPct.textContent = `${pct}%`;
      };

      // Load frame 1 immediately and draw right away
      await loadSingleFrame(0);
      updateProgress();
      sizeCanvas();
      drawFrame(0);
      updateTextStages(0);

      // Concurrent worker pool (~8 concurrent requests) for remaining frames
      let nextIdx = 1;
      async function worker() {
        while (nextIdx < frameCount) {
          const currentSlot = nextIdx++;
          await loadSingleFrame(currentSlot);
          updateProgress();
        }
      }

      const workers = [];
      const poolSize = Math.min(CONCURRENCY_LIMIT, frameCount - 1);
      for (let w = 0; w < poolSize; w++) {
        workers.push(worker());
      }
      await Promise.all(workers);

      if (loader) {
        loader.classList.add("is-done");
      }
      drawFrame(Math.round(currentIndex));
    }

    // Wire GSAP + ScrollTrigger + Lenis (or native fallback if CDN blocked)
    function setupScrollAndTicker() {
      const hasGSAP =
        typeof window.gsap !== "undefined" &&
        typeof window.ScrollTrigger !== "undefined";
      const hasLenis = typeof window.Lenis !== "undefined";

      if (hasGSAP) {
        window.gsap.registerPlugin(window.ScrollTrigger);
      }

      let lenis = null;
      if (hasLenis && hasGSAP) {
        lenis = new window.Lenis({
          smoothWheel: true,
          syncTouch: false
        });
        lenis.on("scroll", window.ScrollTrigger.update);
        window.gsap.ticker.add((t) => {
          lenis.raf(t * 1000);
        });
        window.gsap.ticker.lagSmoothing(0);
      }

      if (hasGSAP) {
        window.ScrollTrigger.create({
          trigger: track,
          start: "top top",
          end: "bottom bottom",
          scrub: true,
          onUpdate: (self) => {
            targetIndex = self.progress * (frameCount - 1);
            updateTextStages(self.progress);
          }
        });

        window.gsap.ticker.add(() => {
          if (isTabHidden) return;
          currentIndex += (targetIndex - currentIndex) * LERP_FACTOR;
          const rounded = Math.round(currentIndex);
          if (rounded !== lastDrawnIndex) {
            drawFrame(rounded);
          }
        });
      } else {
        // Resilient fallback when running offline/sandboxed without external CDN
        const onNativeScroll = () => {
          const rect = track.getBoundingClientRect();
          const scrollable = Math.max(1, rect.height - window.innerHeight);
          const scrolled = Math.min(scrollable, Math.max(0, -rect.top));
          const progress = scrolled / scrollable;
          targetIndex = progress * (frameCount - 1);
          updateTextStages(progress);
        };
        window.addEventListener("scroll", onNativeScroll, { passive: true });
        onNativeScroll();

        const tick = () => {
          if (!isTabHidden) {
            currentIndex += (targetIndex - currentIndex) * LERP_FACTOR;
            const rounded = Math.round(currentIndex);
            if (rounded !== lastDrawnIndex) {
              drawFrame(rounded);
            }
          }
          requestAnimationFrame(tick);
        };
        requestAnimationFrame(tick);
      }

      // Pause drawing when tab is hidden
      document.addEventListener("visibilitychange", () => {
        isTabHidden = document.hidden;
      });

      // Debounced resize handler + ScrollTrigger.refresh
      let resizeTimer = null;
      window.addEventListener("resize", () => {
        sizeCanvas();
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
          sizeCanvas();
          if (hasGSAP && window.ScrollTrigger) {
            window.ScrollTrigger.refresh();
          }
        }, 180);
      });
    }

    setupScrollAndTicker();
    preloadAllFrames();
  }

  document.addEventListener("DOMContentLoaded", initHeroScroll);
  window.SizarHero = { initHeroScroll };
})();
