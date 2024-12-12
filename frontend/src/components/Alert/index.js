import "./alert.scss"

export default (initialState = false, timeOut = 5, removeOnClose = false) => ({
    isOpen: initialState,
    timeoutID: null,
    init() {
        if (timeOut > 0) {
            this.initTimer()
            this.$watch('isOpen', (isOpen) => {
                if (!isOpen)
                    this.clearTimer()

                if (removeOnClose)
                    this.$nextTick(() => {
                        this.$root.remove()
                    })
            })
        }
    },
    initTimer() {
        if (this.isOpen)
            this.timeoutID = setTimeout(() => {
                this.isOpen = false
            }, timeOut * 1000)
    },
    clearTimer() {
        this.timeoutID && clearTimeout(this.timeoutID)
    },
    root: {
        ['x-transition']: '',
        ['x-show']: 'isOpen',
        ['x-modelable']: 'isOpen',
        ['@keyup.escape.window']: 'isOpen = false',
        ['@click.outside']: 'isOpen = false'
    },
    close: {
        ['@click']: 'isOpen = false'
    },
    timer: {
        [':style']() {
            return {
                '--timer-timeout': `${timeOut}s`
            }
        }
    }
})
