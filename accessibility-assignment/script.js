document.addEventListener("DOMContentLoaded", function () {
  const dropdownToggles = document.querySelectorAll(".nav-item.dropdown > a");

  dropdownToggles.forEach((toggle) => {
    const dropdownMenu = toggle.nextElementSibling;

    toggle.addEventListener("focus", function () {
      dropdownMenu.classList.add("show");
      toggle.setAttribute("aria-expanded", "true");
    });

    dropdownMenu.addEventListener("focusout", function (event) {
      if (!dropdownMenu.contains(event.relatedTarget)) {
        dropdownMenu.classList.remove("show");
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  });
});
