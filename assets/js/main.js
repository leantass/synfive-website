/* -------------------------------- */
/* Init general */
/* -------------------------------- */

document.addEventListener("DOMContentLoaded", () => {
  initReveal();
  initHeaderScroll();
  initParallax();
  initAnimatedNetwork();
  initActiveNavLinks();
  initCookieBanner();
  initMobileNavigation();
});

/* -------------------------------- */
/* Reveal animations */
/* -------------------------------- */

function initReveal() {
  const items = document.querySelectorAll(
    ".reveal-on-scroll, .card-hover, main section, footer"
  );

  if (!items.length) return;

  if (!("IntersectionObserver" in window)) {
    items.forEach((item) => {
      item.classList.add("reveal", "visible");
    });
    return;
  }

  items.forEach((item) => {
    if (!item.classList.contains("reveal")) {
      item.classList.add("reveal");
    }
  });

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("visible");
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.12,
      rootMargin: "0px 0px -40px 0px",
    }
  );

  items.forEach((item) => observer.observe(item));
}

/* -------------------------------- */
/* Header dinámico */
/* -------------------------------- */

function initHeaderScroll() {
  const header = document.querySelector("header");
  if (!header) return;

  const onScroll = () => {
    header.classList.toggle("header-scrolled", window.scrollY > 50);
  };

  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });
}

/* -------------------------------- */
/* Navegación mobile */
/* -------------------------------- */

function initMobileNavigation() {
  const toggleButton = document.querySelector("[data-mobile-nav-toggle]");
  const navPanel = document.querySelector("[data-mobile-nav-panel]");

  if (!toggleButton || !navPanel) return;

  const closeMenu = () => {
    navPanel.classList.add("hidden");
    toggleButton.setAttribute("aria-expanded", "false");
  };

  const openMenu = () => {
    navPanel.classList.remove("hidden");
    toggleButton.setAttribute("aria-expanded", "true");
  };

  const toggleMenu = () => {
    const isExpanded = toggleButton.getAttribute("aria-expanded") === "true";
    if (isExpanded) {
      closeMenu();
    } else {
      openMenu();
    }
  };

  toggleButton.setAttribute("aria-expanded", "false");

  if (window.innerWidth >= 768) {
    closeMenu();
  }

  toggleButton.addEventListener("click", toggleMenu);

  document.addEventListener("click", (event) => {
    const target = event.target;
    if (!(target instanceof Node)) return;

    const clickedInsidePanel = navPanel.contains(target);
    const clickedToggle = toggleButton.contains(target);

    if (!clickedInsidePanel && !clickedToggle) {
      closeMenu();
    }
  });

  document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
      closeMenu();
    }
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth >= 768) {
      closeMenu();
    }
  });

  const navLinks = navPanel.querySelectorAll("a");
  navLinks.forEach((link) => {
    link.addEventListener("click", closeMenu);
  });
}

/* -------------------------------- */
/* Parallax suave */
/* -------------------------------- */

function initParallax() {
  const heroGlow = document.querySelector(".network-bg");
  if (!heroGlow) return;

  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  if (prefersReducedMotion) return;

  let ticking = false;

  const updateParallax = () => {
    const scroll = window.scrollY;
    heroGlow.style.transform = `translateY(${scroll * 0.18}px)`;
    ticking = false;
  };

  const onScroll = () => {
    if (ticking) return;
    ticking = true;
    window.requestAnimationFrame(updateParallax);
  };

  window.addEventListener("scroll", onScroll, { passive: true });
  updateParallax();
}

/* -------------------------------- */
/* Red de nodos animada */
/* -------------------------------- */

function initAnimatedNetwork() {
  const canvas = document.getElementById("networkCanvas");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");
  if (!ctx) return;

  const reducedMotionQuery = window.matchMedia("(prefers-reduced-motion: reduce)");
  const heroSection = document.getElementById("inicio") || canvas.parentElement;

  let animationFrameId = null;
  let nodes = [];
  let isInViewport = true;

  const mouse = {
    x: null,
    y: null,
    radius: 140,
  };

  function getCanvasSize() {
    const width = heroSection ? heroSection.offsetWidth : window.innerWidth;
    const height = heroSection ? heroSection.offsetHeight : window.innerHeight;

    return {
      width: Math.max(width, 1),
      height: Math.max(height, 1),
    };
  }

  function resizeCanvas() {
    const { width, height } = getCanvasSize();
    const dpr = Math.min(window.devicePixelRatio || 1, 2);

    canvas.width = Math.floor(width * dpr);
    canvas.height = Math.floor(height * dpr);
    canvas.style.width = `${width}px`;
    canvas.style.height = `${height}px`;

    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  }

  function createNodes() {
    nodes = [];

    const isMobile = window.innerWidth < 768;
    const nodeCount = isMobile ? 34 : 56;
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;

    for (let i = 0; i < nodeCount; i++) {
      nodes.push({
        x: Math.random() * width,
        y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.28,
        vy: (Math.random() - 0.5) * 0.28,
        radius: Math.random() * 1.8 + 1.2,
      });
    }
  }

  function drawNodes() {
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;

    ctx.clearRect(0, 0, width, height);

    for (const node of nodes) {
      node.x += node.vx;
      node.y += node.vy;

      if (node.x <= 0 || node.x >= width) node.vx *= -1;
      if (node.y <= 0 || node.y >= height) node.vy *= -1;

      ctx.beginPath();
      ctx.arc(node.x, node.y, node.radius, 0, Math.PI * 2);
      ctx.fillStyle = "rgba(147, 197, 253, 0.85)";
      ctx.fill();
    }

    const maxDist = 145;
    const maxDistSq = maxDist * maxDist;

    for (let i = 0; i < nodes.length; i++) {
      for (let j = i + 1; j < nodes.length; j++) {
        const dx = nodes[i].x - nodes[j].x;
        const dy = nodes[i].y - nodes[j].y;
        const distSq = dx * dx + dy * dy;

        if (distSq < maxDistSq) {
          const dist = Math.sqrt(distSq);
          const opacity = Math.max(0.02, 0.1 - dist / 1800);

          ctx.beginPath();
          ctx.moveTo(nodes[i].x, nodes[i].y);
          ctx.lineTo(nodes[j].x, nodes[j].y);
          ctx.strokeStyle = `rgba(120, 160, 255, ${opacity})`;
          ctx.lineWidth = 1;
          ctx.stroke();
        }
      }
    }

    if (mouse.x !== null && mouse.y !== null) {
      const mouseRadiusSq = mouse.radius * mouse.radius;

      for (const node of nodes) {
        const dx = node.x - mouse.x;
        const dy = node.y - mouse.y;
        const distSq = dx * dx + dy * dy;

        if (distSq < mouseRadiusSq) {
          const dist = Math.sqrt(distSq);
          const opacity = Math.max(0.02, 0.18 - dist / 900);

          ctx.beginPath();
          ctx.moveTo(node.x, node.y);
          ctx.lineTo(mouse.x, mouse.y);
          ctx.strokeStyle = `rgba(34, 211, 238, ${opacity})`;
          ctx.lineWidth = 1;
          ctx.stroke();
        }
      }
    }

    animationFrameId = window.requestAnimationFrame(drawNodes);
  }

  function stopAnimation() {
    if (animationFrameId !== null) {
      window.cancelAnimationFrame(animationFrameId);
      animationFrameId = null;
    }
  }

  function clearCanvas() {
    ctx.clearRect(0, 0, canvas.clientWidth, canvas.clientHeight);
  }

  function startAnimation() {
    if (reducedMotionQuery.matches || animationFrameId !== null || !isInViewport) return;
    drawNodes();
  }

  function handlePointerMove(event) {
    const rect = canvas.getBoundingClientRect();
    mouse.x = event.clientX - rect.left;
    mouse.y = event.clientY - rect.top;
  }

  function handlePointerLeave() {
    mouse.x = null;
    mouse.y = null;
  }

  function handleResize() {
    stopAnimation();
    resizeCanvas();
    createNodes();
    startAnimation();
  }

  function handleVisibilityChange() {
    if (document.hidden) {
      stopAnimation();
    } else {
      startAnimation();
    }
  }

  function handleReducedMotionChange() {
    if (reducedMotionQuery.matches) {
      stopAnimation();
      clearCanvas();
    } else {
      handleResize();
    }
  }

  function handleViewport(entries) {
    entries.forEach((entry) => {
      isInViewport = entry.isIntersecting;

      if (!isInViewport) {
        stopAnimation();
      } else {
        startAnimation();
      }
    });
  }

  resizeCanvas();
  createNodes();

  if (!reducedMotionQuery.matches) {
    startAnimation();
  } else {
    clearCanvas();
  }

  window.addEventListener("resize", handleResize, { passive: true });
  document.addEventListener("visibilitychange", handleVisibilityChange);
  canvas.addEventListener("pointermove", handlePointerMove);
  canvas.addEventListener("pointerleave", handlePointerLeave);

  if ("IntersectionObserver" in window && heroSection) {
    const viewportObserver = new IntersectionObserver(handleViewport, {
      threshold: 0.05,
    });

    viewportObserver.observe(heroSection);
  }

  if (typeof reducedMotionQuery.addEventListener === "function") {
    reducedMotionQuery.addEventListener("change", handleReducedMotionChange);
  } else if (typeof reducedMotionQuery.addListener === "function") {
    reducedMotionQuery.addListener(handleReducedMotionChange);
  }
}

/* -------------------------------- */
/* Nav links activos por sección */
/* -------------------------------- */

function initActiveNavLinks() {
  const links = document.querySelectorAll("nav a[href*='#']");
  const sections = document.querySelectorAll("section[id]");

  if (!links.length || !sections.length) return;

  const currentPath = window.location.pathname.replace(/\/$/, "") || "/";

  const setActive = () => {
    let currentId = "";

    sections.forEach((section) => {
      const sectionTop = section.offsetTop - 140;
      const sectionHeight = section.offsetHeight;

      if (
        window.scrollY >= sectionTop &&
        window.scrollY < sectionTop + sectionHeight
      ) {
        currentId = section.getAttribute("id") || "";
      }
    });

    links.forEach((link) => {
      link.classList.remove("active-link");

      const href = link.getAttribute("href");
      if (!href || !href.includes("#")) return;

      const [pathPart, hashPart] = href.split("#");
      const normalizedHrefPath =
        (pathPart || window.location.pathname).replace(/\/$/, "") || "/";

      if (
        hashPart &&
        normalizedHrefPath === currentPath &&
        hashPart === currentId
      ) {
        link.classList.add("active-link");
      }
    });
  };

  setActive();
  window.addEventListener("scroll", setActive, { passive: true });
  window.addEventListener("hashchange", setActive, { passive: true });
}

/* -------------------------------- */
/* Cookie banner */
/* -------------------------------- */

function initCookieBanner() {
  const cookieBanner = document.getElementById("cookie-banner");
  const acceptCookies = document.getElementById("accept-cookies");
  const rejectCookies = document.getElementById("reject-cookies");

  if (!cookieBanner) return;

  const storageKey = "synfive_cookie_choice";
  const cookieChoice = localStorage.getItem(storageKey);

  if (!cookieChoice) {
    cookieBanner.classList.remove("hidden");
    cookieBanner.classList.add("flex");
  }

  const hideBanner = () => {
    cookieBanner.classList.remove("flex");
    cookieBanner.classList.add("hidden");
  };

  if (acceptCookies) {
    acceptCookies.addEventListener("click", () => {
      localStorage.setItem(storageKey, "accepted");
      hideBanner();
    });
  }

  if (rejectCookies) {
    rejectCookies.addEventListener("click", () => {
      localStorage.setItem(storageKey, "rejected");
      hideBanner();
    });
  }
}