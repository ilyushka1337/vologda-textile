import "./alert.scss"

export default (initialState = false, timeOut = 5) => ({
    isOpen: initialState,
    timeoutID: null,
    init() {
        if (timeOut > 0) {
            this.$watch('isOpen', (value) => this.handleTimeout(value))
        }
    },
    handleTimeout(isOpen) {
        if (isOpen)
            this.timeoutID = setTimeout(() => {
                this.isOpen = false
            }, timeOut * 1000)
        else
            clearTimeout(this.timeoutID)
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
