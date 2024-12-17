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

import ProductPage from "../bitrix/ProductPage";
Alpine.data("ProductPage", ProductPage);

import Alert from "../components/Alert";
Alpine.data("Alert", Alert)

import FancyboxGallery from "../components/FancyboxGallery";
Alpine.data("FancyboxGallery", FancyboxGallery)

import Select from "../components/Select";
Alpine.data("Select", Select)

import HistorySlider from "./HistorySlider";
Alpine.data("HistorySlider", HistorySlider)

import Video from "./Video";
Alpine.data("Video", Video)

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
