import "./select.scss";

export default (sortOptions = {}, initialValue = '', initialState = false) => ({
    isOpen: initialState,
    value: initialValue || Object.keys(sortOptions)[0],
    options: sortOptions,
    get text() {
        return this.options[this.value]
    },
    close() {
        this.isOpen = false
    },
    open() {
        this.isOpen = true
    },
    set(value) {
        this.value = value
        this.$nextTick(() => this.$dispatch('change-value'))
    },
    option(value) {
        this.set(value)
        this.close()
    },
    root: {
        ['x-ref']: 'root',
        ['x-modelable']: 'isOpen',
        ['@click.outside']: 'close()',
        ['@keyup.escape.window']: 'close()',
    },
    valueRow: {
        ['x-ref']: 'value',
        ['@click']: 'open()',
    },
    dropdown: {
        ['x-ref']: 'dropdown',
        ['x-transition']: '',
        ['x-show']: 'isOpen',
    }
})