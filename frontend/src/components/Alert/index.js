import "./alert.scss"

export default (initialState = false, timeOut = 5) => ({
    isOpen: initialState,
    init() {
        if (timeOut > 0)
            setTimeout(() => {
                this.$root.remove()
            }, timeOut * 1000)
    },
    root: {
        ['x-transition']: '',
        ['x-show']: 'isOpen',
        ['x-modelable']: 'isOpen',
        ['@keyup.escape.window']: 'isOpen = false'
    },
    close: {
        ['@click']: 'isOpen = false'
    }
})
