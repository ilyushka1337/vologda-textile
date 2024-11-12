import '@fontsource-variable/montserrat/wght.css';
import '@fontsource-variable/montserrat/wght-italic.css';
import "swiper/css"
import "./main.scss"

window.addEventListener("load", () => {
    import("htmx.org").then(htmx => {
        htmx.config.scrollIntoViewOnBoost = false
    })
})

import "./alpine";
