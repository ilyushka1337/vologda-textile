import Alpine from "alpinejs";
import mask from '@alpinejs/mask';
import collapse from '@alpinejs/collapse'

Alpine.plugin(mask);
Alpine.plugin(collapse);

Alpine.magic("sessid", () => {
    return window.sessid
})

import Modal from '../components/Modal'
Alpine.data("Modal", Modal)

import FancyboxGallery from "../components/FancyboxGallery"
Alpine.data("FancyboxGallery", FancyboxGallery)

import PhoneInputMask from "../components/PhoneInputMask"
Alpine.data("PhoneInputMask", PhoneInputMask)

import Accordion from "../components/Accordion";
Alpine.data("Accordion", Accordion)

import MainSlider from "./MainSlider"
Alpine.data("MainSlider", MainSlider)

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
