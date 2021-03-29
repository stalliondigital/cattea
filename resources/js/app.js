require("./bootstrap");

require("alpinejs");

let menuToggle = document.getElementById("menu-toggle");
let menuSection = document.querySelectorAll(".menu-section");
let navigation = document.querySelectorAll(".header-navigation");
menuToggle.onclick = function () {
    this.classList.toggle("on");
    for (let x of menuSection) {
        x.classList.toggle("on");
    }
    for (let y of navigation) {
        y.classList.toggle("nav-hidden");
    }
};

import SwiperCore, { Navigation, Pagination } from "swiper/core";
import "swiper/swiper-bundle.css";

SwiperCore.user([Navigation, Pagination]);
