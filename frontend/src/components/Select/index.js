import "./select.scss";

export default (selectOptions = {}, initialValue = '', initialState = false) => ({
    isOpen: initialState,
    value: initialValue || Object.keys(selectOptions)[0],
    options: selectOptions,
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
        ['x-modelable']: 'value',
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