import Swiper from "swiper"
import { Thumbs, Navigation } from "swiper/modules"

export default (params = {}) => ({
    isAddedToWishlist: false,
    showWishlistAlert: false,
    currentOffer: params.OFFERS[0],
    thumbsSwiper: null,
    mainSwiper: null,
    init() {
        this.initSlider()

        this.$watch('currentOffer.PROPERTIES.PREVIEW_GALLERY.VALUE', () => {
            this.$nextTick(() => {
                this.thumbsSwiper.update()
                this.mainSwiper.update()
            })
        })
    },

    initSlider() {
        this.thumbsSwiper = new Swiper(this.$refs.thumbsSwiper, {
            speed: 400,
            spaceBetween: 11,
            direction: 'vertical',
            slidesPerView: 6
        })

        this.mainSwiper = new Swiper(this.$refs.mainSwiper, {
            modules: [Thumbs, Navigation],
            speed: 700,
            spaceBetween: 20,
            navigation: {
                prevEl: this.$refs.mainSliderPrev,
                nextEl: this.$refs.mainSliderNext
            },
            thumbs: {
                swiper: this.thumbsSwiper
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
        console.log(params.ID)
        this.isAddedToWishlist = true
        this.showWishlistAlert = true
    }
})