window.__initCustomBitrixParameter__ = (arParams: BitrixComponentParams) => {
    const script = document.createElement('script')
    script.src = arParams.data.isDevelopment ? arParams.data.createScriptSrc : arParams.data.createScriptSrc
    script.type = 'module'
    script.addEventListener('load', function () {
        window.__createCustomBitrixParameter__(arParams)
    })
    document.head.appendChild(script)
}