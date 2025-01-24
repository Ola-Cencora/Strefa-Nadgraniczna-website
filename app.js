// HEADER
// navigation

const BURGER_MENU = document.querySelector(".hamburger");
const NAVIGATION = document.querySelector(".menu__navigation");
const NAVIGATION_LINKS = NAVIGATION.querySelectorAll("a");
const SECTIONS = document.querySelectorAll("section");

if (BURGER_MENU) {
  BURGER_MENU.addEventListener("click", () => {
    NAVIGATION.classList.toggle("show");
    BURGER_MENU.classList.toggle("show");
  });
}

NAVIGATION_LINKS.forEach((link) => {
  link.addEventListener("click", () => {
    NAVIGATION_LINKS.forEach((navLink) => navLink.classList.remove("active"));

    link.classList.add("active");

    NAVIGATION.classList.remove("show");
    BURGER_MENU.classList.remove("show");
  });
});
