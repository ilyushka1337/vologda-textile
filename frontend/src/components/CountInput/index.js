import "./count-input.scss"

export default (initialValue = 0) => ({
    value: initialValue,
    root: {
        ['x-modelable']: 'value'
    },
    input: {
        ['x-model']: 'value'
    },
    increment: {
        ['@click']: 'value++',
    },
    decrement: {
        ['@click']: 'value--',
    }
})
