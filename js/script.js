document.addEventListener("DOMContentLoaded", function () {
  // ==== TAB SISTEM (HANYA UNTUK PAGE YANG ADA) ====
  const tabButtons = document.querySelectorAll(".tab-btn");
  const contentBoxes = document.querySelectorAll(".content-box");

  if (tabButtons.length > 0 && contentBoxes.length > 0) {
    const defaultTab = "sejarah";

    document.getElementById(defaultTab)?.classList.remove("hidden");
    document
      .querySelector(`.tab-btn[data-target="${defaultTab}"]`)
      ?.classList.add("text-blue-500", "border-blue-500");

    tabButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const targetId = this.getAttribute("data-target");

        tabButtons.forEach((btn) => {
          btn.classList.remove("text-blue-500", "border-blue-500");
          btn.classList.add("text-gray-600", "border-gray-300");
        });

        this.classList.add("text-blue-500", "border-blue-500");

        contentBoxes.forEach((box) => box.classList.add("hidden"));
        document.getElementById(targetId)?.classList.remove("hidden");
      });
    });
  }

  // ==== MENU MOBILE & DESKTOP (HANYA JIKA ADA ELEMEN) ====
  const menuButton = document.getElementById("menu-button");
  const menu = document.getElementById("menu");
  const closeMenuButton = document.getElementById("close-menu");
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileDropdown = document.getElementById("mobile-dropdown");
  const desktopDropdown = document.getElementById("desktop-dropdown");
  const desktopMenuButton = document.getElementById("desktop-menu-button");

  function openMenu() {
    menu?.classList.remove("translate-x-full");
    menu?.classList.add("translate-x-0");
  }

  function closeMenu() {
    menu?.classList.remove("translate-x-0");
    menu?.classList.add("translate-x-full");
  }

  if (menuButton && menu) menuButton.addEventListener("click", openMenu);
  if (closeMenuButton && menu) closeMenuButton.addEventListener("click", closeMenu);

  if (mobileMenuButton && mobileDropdown) {
    mobileMenuButton.addEventListener("click", () => {
      mobileDropdown.classList.toggle("scale-y-100");
      mobileDropdown.classList.toggle("scale-y-0");
    });
  }

  if (desktopMenuButton && desktopDropdown) {
    desktopMenuButton.addEventListener("click", () => {
      desktopDropdown.classList.toggle("hidden");
    });
  }

  // ==== DROPDOWN PAKET (INI PENTING UNTUK SEMUA PAGE) ====
  const dropdown = document.querySelector(".dropdown");

  if (dropdown) {
    const button = dropdown.querySelector("button");
    const menuDrop = dropdown.querySelector(".dropdown-menu");

    if (button && menuDrop) {
      button.addEventListener("click", (e) => {
        e.stopPropagation();
        menuDrop.classList.toggle("hidden");
      });

      document.addEventListener("click", (e) => {
        if (!dropdown.contains(e.target)) {
          menuDrop.classList.add("hidden");
        }
      });
    }
  }
});
