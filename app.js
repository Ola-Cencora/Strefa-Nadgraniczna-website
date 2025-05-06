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

// swiper slider

const swiper = new Swiper(".swiper", {
  slidesPerView: 1,
  loop: true,
  spaceBetween: 7,
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    1440: {
      slidesPerView: 3,
    },
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  speed: 1000,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// contact form

const CONTACT_FORM = document.querySelector(".contact__form");

async function handleSubmit(event) {
  event.preventDefault();
  const FORM_STATUS = document.querySelector(".contact__form___status");
  var data = new FormData(event.target);
  fetch(event.target.action, {
    method: CONTACT_FORM.method,
    body: data,
    headers: {
      Accept: "application/json",
    },
  })
    .then((response) => {
      if (response.ok) {
        FORM_STATUS.innerHTML =
          "Dzięki za wiadomość! Postaramy się odpowiedzieć jak najszybciej :)";
        CONTACT_FORM.reset();
      } else {
        response.json().then((data) => {
          if (Object.hasOwn(data, "errors")) {
            FORM_STATUS.innerHTML = data["errors"]
              .map((error) => error["message"])
              .join(", ");
          } else {
            FORM_STATUS.innerHTML =
              "Ups! Coś poszło nie tak, spróbuj wysłać pytanie jeszcze raz lub skontaktuj się z nami bezpośrednio:";
          }
        });
      }
    })
    .catch((error) => {
      FORM_STATUS.innerHTML =
        "Ups! Coś poszło nie tak, spróbuj wysłać pytanie jeszcze raz lub skontaktuj się z nami bezpośrednio:";
    });
}
CONTACT_FORM.addEventListener("submit", handleSubmit);
