import Swiper from "swiper"
import { Thumbs, Navigation } from "swiper/modules"

export default (params = {}) => ({
    isAddedToWishlist: false,
    init() {
        const thumbsSwiper = new Swiper(this.$refs.thumbsSwiper, {
            speed: 400,
            spaceBetween: 11,
            direction: 'vertical',
            slidesPerView: 6
        })

        new Swiper(this.$refs.mainSwiper, {
            modules: [Thumbs, Navigation],
            speed: 700,
            spaceBetween: 20,
            navigation: {
                prevEl: this.$refs.mainSliderPrev,
                nextEl: this.$refs.mainSliderNext
            },
            thumbs: {
                swiper: thumbsSwiper
            }
        })

        new Swiper(this.$refs.colorsSlider, {
            modules: [Navigation],
            speed: 400,
            spaceBetween: 11,
            slidesPerView: 6,
            navigation: {
                prevEl: this.$refs.colorsSliderPrev,
                nextEl: this.$refs.colorsSliderNext
            },
        })
    },

    addToWishlist() {
        this.isAddedToWishlist = true
    }
})