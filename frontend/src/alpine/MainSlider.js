import Swiper from "swiper"
import { Navigation, Pagination } from "swiper/modules"

export default () => ({
    init() {
        new Swiper(this.$root, {
            modules: [Navigation, Pagination],
            speed: 900,
            spaceBetween: 26,
            navigation: {
                prevEl: this.$refs.prev,
                nextEl: this.$refs.next
            },
            pagination: {
                el: this.$refs.pagination,
                clickable: true
            }
        })
    }
})