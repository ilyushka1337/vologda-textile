import '@fontsource-variable/montserrat/wght.css';
import '@fontsource-variable/montserrat/wght-italic.css';
import "swiper/css"
import "swiper/css/scrollbar"
import "./main.scss"

window.addEventListener("load", () => {
    import("htmx.org").then(htmx => {
        htmx.config.scrollIntoViewOnBoost = false
    })
})

import "./alpine";
