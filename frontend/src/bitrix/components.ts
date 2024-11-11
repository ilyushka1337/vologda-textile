import { createApp } from 'vue'
import App from './App.vue'

window.__createCustomBitrixParameter__ = (arParams: BitrixComponentParams) => {
    const vueComponentRoot = document.createElement('div')
    vueComponentRoot.className = 'custom-bitrix-vue-component-root'
    vueComponentRoot.id = `custom-bitrix-vue-component-root-${arParams.propertyParams._propId}`
    arParams.oCont.appendChild(vueComponentRoot)
    createApp(App).mount(vueComponentRoot)
}