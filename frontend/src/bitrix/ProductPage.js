import Swiper from "swiper"
import { Thumbs, Navigation } from "swiper/modules"

export default (params = {}) => ({
    showWishlistAlert: false,
    currentOffer: params.OFFERS[0],
    thumbsSwiper: null,
    mainSwiper: null,
    colorsSwiper: null,
    selectedSkuValues: {},
    get showSkuProps() {
        if (!this.currentOffer)
            return null

        let result = {}
        for (let property of params.SKU_PROPS) {
            let currentOfferValue = this.currentOffer.PROPERTIES[property.CODE].VALUE

            let values = []
            let pictures = []
            let currentValue = '';
            for (let i in property.VALUES) {
                let propertyValue = property.VALUES[i]
                if (propertyValue.ID == 0) {
                    continue;
                }

                if (property.CODE == 'COLOR') {
                    for (let offer of params.OFFERS) {
                        if (offer.PROPERTIES.COLOR.VALUE == propertyValue.NAME) {
                            pictures.push(offer.PROPERTIES.PREVIEW_GALLERY.VALUE[0])
                            break;
                        }
                    }
                }

                propertyValue.IS_CURRENT = propertyValue.NAME == currentOfferValue
                if (propertyValue.NAME == currentOfferValue) {
                    currentValue = propertyValue.NAME
                }
                values.push(propertyValue.NAME)
            }

            if (values.length == 0)
                continue;

            result[property.CODE] = {
                VALUES: values,
                PICTURES: pictures,
                CURRENT_VALUE: currentValue,
                NAME: property.NAME
            }
        }

        return result
    },
    init() {
        if (!this.currentOffer)
            return;

        this.updateSelectedSkuValues()
        this.initSlider()
    },

    updateOfferForSelectedProperty(selectedPropertyCode, selectedPropertyValue) {
        let filter = {
            ...this.selectedSkuValues,
            [selectedPropertyCode]: selectedPropertyValue
        }

        let offersRelevancy = Array(params.OFFERS.length).fill(0, 0, params.OFFERS.length)

        let i = 0
        for (let offer of params.OFFERS) {
            for (let code in offer.PROPERTIES) {
                if (!filter[code] || filter[code] !== offer.PROPERTIES[code].VALUE)
                    continue;

                offersRelevancy[i] += code === selectedPropertyCode ? 2 : 1
            }
            i++
        }

        let maxRelevancy = Math.max(...offersRelevancy)
        let offerIndex = offersRelevancy.findIndex(value => value === maxRelevancy)

        if (offerIndex === -1 || offerIndex > params.OFFERS.length) {
            throw new Error("Could not find relevant offer");
        }

        this.currentOffer = params.OFFERS[offerIndex]
        this.updateSelectedSkuValues()
    },

    updateSelectedSkuValues() {
        for (let prop of params.SKU_PROPS) {
            this.selectedSkuValues[prop.CODE] = this.currentOffer.PROPERTIES[prop.CODE].VALUE
        }
    },

    initSlider() {
        this.thumbsSwiper = new Swiper(this.$refs.thumbsSwiper, {
            speed: 400,
            spaceBetween: 11,
            slidesPerView: 4,
            breakpoints: {
                768: {
                    direction: 'vertical',
                    slidesPerView: 6,
                }
            }
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



        this.$watch('currentOffer.PROPERTIES.PREVIEW_GALLERY.VALUE', () => {
            this.$nextTick(() => {
                this.thumbsSwiper.update()
                this.mainSwiper.update()
            })
        })
    },

    initColorsSlider() {
        this.colorsSwiper = new Swiper(this.$refs.colorsSlider, {
            modules: [Navigation],
            speed: 400,
            spaceBetween: 11,
            slidesPerView: 4,
            slideToClickedSlide: true,
            navigation: {
                prevEl: this.$refs.colorsSliderPrev,
                nextEl: this.$refs.colorsSliderNext
            },
            breakpoints: {
                768: {
                    slidesPerView: 6,
                }
            }
        })
    }
})