import Swiper from "swiper"
import { Navigation, Pagination } from "swiper/modules"
import "./main-slider.scss"

export default () => ({
    init() {
        new Swiper(this.$root, {
            modules: [Navigation, Pagination],
            speed: 900,
            spaceBetween: 10,
            navigation: {
                prevEl: this.$refs.prev,
                nextEl: this.$refs.next
            },
            pagination: {
                el: this.$refs.pagination,
                clickable: true
            },
            breakpoints: {
                1280: {
                    spaceBetween: 26,
                }
            }
        })
    }
})