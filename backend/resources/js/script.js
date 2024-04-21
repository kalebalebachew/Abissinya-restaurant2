document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.getElementById("toggleBtn");
    const mobileNav = document.getElementById("mobileNav");
    const icon = document.getElementById("icon");
    const links = document.querySelectorAll(".links");

    toggleBtn.addEventListener("click", function () {
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-times");
    });

    toggleBtn.addEventListener("click", () => {
        const visible = mobileNav.getAttribute("data-visible");
        if (visible === "true") {
            mobileNav.setAttribute("data-visible", "false");
            toggleBtn.setAttribute("aria-expanded", "false");
        } else {
            mobileNav.setAttribute("data-visible", "true");
            toggleBtn.setAttribute("aria-expanded", "true");
        }
    });
    links.forEach((links) => {
        links.addEventListener("click", function () {
            mobileNav.setAttribute("data-visible", "false");
            toggleBtn.setAttribute("aria-expanded", "false");
            icon.classList.toggle("fa-bars");
            icon.classList.toggle("fa-times");
        });
    });
});