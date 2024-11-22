import Swiper from "swiper"
import "./partners-slider.scss"

export default () => ({
    init() {
        new Swiper(this.$refs.swiper, {
            spaceBetween: 20,
            speed: 400,
            slidesPerView: 'auto',
            breakpoints: {
                1280: {
                    spaceBetween: 45,
                }
            }
        })
    }
})