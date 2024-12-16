import Swiper from "swiper"
import { Pagination } from "swiper/modules"

export default () => ({
    init() {
        new Swiper(this.$refs.swiper, {
            modules: [Pagination],
            spaceBetween: 40,
            pagination: {
                el: this.$refs.pagination,
                clickable: true
            },
            breakpoints: {
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 80,
                },
                768: {
                    slidesPerView: 2
                }
            }
        })
    }
})