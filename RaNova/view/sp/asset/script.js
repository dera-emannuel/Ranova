const contentArea = document.getElementById("contentArea");
const links = document.querySelectorAll(".sidebarLink");
const preloader = document.getElementById("preloader");
let sidebar = document.getElementById("sidebar");
let menu = document.getElementById("menu");

const pagesBase = "./pages/";

/* ================= PRELOADER ================= */
function showPreloader() {
  preloader.style.visibility = "visible";
  preloader.style.opacity = "1";
  preloader.style.pointerEvents = "auto";
}

function hidePreloader() {
  preloader.style.opacity = "0";
  preloader.style.visibility = "hidden";
  preloader.style.pointerEvents = "none";
}

/* ================= PAGE LOADER ================= */
async function loadPage(page, push = true) {
  showPreloader();

  await new Promise((resolve) => requestAnimationFrame(resolve));

  try {
    const res = await fetch(pagesBase + page + ".php", {
      cache: "no-cache",
    });

    if (!res.ok) throw new Error("Page not found");

    const html = await res.text();

    setTimeout(() => {
      contentArea.innerHTML = html;
      hidePreloader();

      // 🔥 call page-specific JS AFTER content loads
      window["init_" + page]?.();
    }, 10);

    if (push) {
      history.pushState({ page }, "", "?page=" + page);
    }
  } catch (err) {
    setTimeout(() => {
      hidePreloader();
      contentArea.innerHTML = "<p style='color:red'>Error loading page</p>";
    }, 10);
  }
}

/* ================= SIDEBAR LINKS ================= */
links.forEach((link) => {
  link.addEventListener("click", () => {
    links.forEach((l) => l.classList.remove("active"));
    link.classList.add("active");

    const page = link.dataset.page;
    loadPage(page);
  });
});

/* ================= DEFAULT PAGE ================= */
const params = new URLSearchParams(window.location.search);
const defaultPage = params.get("page") || "dashboard";
loadPage(defaultPage, false);

/* ================= MOBILE MENU ================= */
menu.addEventListener("click", function (e) {
  e.stopPropagation();
  sidebar.classList.toggle("add");
});

links.forEach((link) => {
  link.addEventListener("click", function (e) {
    e.stopPropagation();
    sidebar.classList.remove("add");
  });
});

/* =================================================
   PAGE-SPECIFIC INITIALIZERS
   ================================================= */

/* ---------- DASHBOARD ---------- */
function init_dashboard() {}
function init_hospitals() {
  const overlay = document.querySelector(".overlays");
  const openBtn = document.querySelector(".messageAllHospital button");
  const closeBtn = document.querySelector(".closeForm");
  const submitBtn = document.querySelector(".submitBtn");

  if (openBtn && overlay) {
    openBtn.addEventListener("click", () => {
      overlay.classist.add("active");
    });
  }
  L;

  if (closeBtn && overlay) {
    closeBtn.addEventListener("click", () => {
      overlay.classList.remove("active");
    });
  }

  if (overlay) {
    overlay.addEventListener("click", (e) => {
      if (e.target === overlay) {
        overlay.classList.remove("active");
      }
    });
  }

  if (submitBtn) {
    submitBtn.addEventListener("click", function () {
      alert("hello");
    });
  }

  const messageUsers = document.querySelectorAll(".messageUser");
  const messageOverlay = document.querySelector(".overlay");

  messageUsers.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.stopPropagation();
      messageOverlay.classList.add("active");
    });
  });

  messageOverlay.addEventListener("click", (e) => {
    if (e.target === messageOverlay) {
      messageOverlay.classList.remove("active");
    }
  });

  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("closeForm")) {
      e.stopPropagation();
      messageOverlay.classList.remove("active");
    }
  });

  // =================editHospital modal=========
  let editHospital = document.querySelectorAll(".editHospital");
  let editModal = document.querySelector(".editModel");

  editHospital.forEach((edit) => {
    edit.addEventListener("click", (e) => {
      editModal.classList.add("active");
    });
  });

  editModal.addEventListener("click", (e) => {
    if (e.target === editModal) {
      editModal.classList.remove("active");
    }
  });

  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("closeForm")) {
      e.stopPropagation();
      editModal.classList.remove("active");
    }
  });

  const triggers = document.querySelectorAll(".hospitalActionTrigger");

  triggers.forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      e.stopPropagation();

      document
        .querySelectorAll(".hospitalActionMenu")
        .forEach((menu) => menu.classList.remove("active"));

      const menu = trigger.nextElementSibling;
      menu.classList.toggle("active");
    });
  });

  document.addEventListener("click", () => {
    document
      .querySelectorAll(".hospitalActionMenu")
      .forEach((menu) => menu.classList.remove("active"));
  });
}

function init_doctors() {
  // =====================MESSAGE DOCTOR MODAL==========
  let docMessageBtn = document.querySelector(".messageDocBtn button");
  let messageHospitalModal = document.querySelector(".messageHospitalModal");

  docMessageBtn.addEventListener("click", function (e) {
    messageHospitalModal.classList.add("active");
  });

  document.addEventListener("click", (e) => {
    if (e.target.classList.contains("closeForm")) {
      e.stopPropagation();
      messageHospitalModal.classList.remove("active");
    }
  });

  messageHospitalModal.addEventListener("click", function (e) {
    e.stopPropagation();
    messageHospitalModal.classList.remove("active");
  });

  const triggers = document.querySelectorAll(".hospitalActionTrigger");

  triggers.forEach((trigger) => {
    trigger.addEventListener("click", (e) => {
      e.stopPropagation();

      document
        .querySelectorAll(".hospitalActionMenu")
        .forEach((menu) => menu.classList.remove("active"));

      const menu = trigger.nextElementSibling;
      menu.classList.toggle("active");
    });
  });

  document.addEventListener("click", () => {
    document
      .querySelectorAll(".hospitalActionMenu")
      .forEach((menu) => menu.classList.remove("active"));
  });
}

function init_appointments() {
  // appointments page logic
}
