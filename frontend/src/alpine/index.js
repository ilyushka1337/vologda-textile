import Alpine from "alpinejs";
import mask from '@alpinejs/mask';
import collapse from '@alpinejs/collapse'

Alpine.plugin(mask);
Alpine.plugin(collapse);

Alpine.magic("sessid", () => {
    return window.sessid
})



import ReviewsSlider from "./ReviewsSlider"
Alpine.data("ReviewsSlider", ReviewsSlider)

import PartnersSlider from "../components/PartnersSlider"
Alpine.data("PartnersSlider", PartnersSlider)

import MainSlider from "../components/MainSlider";
Alpine.data("MainSlider", MainSlider)

import PhoneInputMask from "../components/PhoneInputMask";
Alpine.data("PhoneInputMask", PhoneInputMask);

Alpine.store('catalogMenu', {
    isOpen: false
})

Alpine.store('mobileCatalog', {
    isOpen: false
})

Alpine.store('mobileMenu', {
    isOpen: false
})

Alpine.start();
