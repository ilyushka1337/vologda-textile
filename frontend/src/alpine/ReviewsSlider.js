import Swiper from "swiper"
import { Scrollbar } from "swiper/modules"

export default () => ({
    init() {
        new Swiper(this.$refs.swiper, {
            modules: [Scrollbar],
            speed: 600,
            spaceBetween: 7,
            scrollbar: {
                el: this.$refs.scrollbar,
                draggable: true
            },
            breakpoints: {
                1280: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                }
            }
        })
    }
})