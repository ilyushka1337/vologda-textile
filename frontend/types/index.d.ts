/// <reference types="vite/client" />

declare global {
    interface Window {
        __initCustomBitrixParameter__: (arParams: any) => void,
        __createCustomBitrixParameter__: (arParams: any) => void,
        sessid: string
    }

    type BitrixComponentParamsData = Record<string, any> & {
        vueComponent: string,
        isDevelopment: boolean,
        createScriptSrc: string
    }

    interface BitrixComponentParams {
        data: BitrixComponentParamsData,
        propertyID: string,
        fChange: () => void,
        getElements: () => void,
        oCont: HTMLTableCellElement,
        oInput: HTMLInputElement,
        propertyParams: {
            ID: string,
            JS_DATA: BitrixComponentParamsData,
            JS_EVENT: string,
            JS_FILE: string,
            MULTIPLE: 'N' | 'Y',
            NAME: string,
            PARENT: string,
            ROWS: number,
            TOOLTIP: string,
            TYPE: 'CUSTOM',
            _propId: string
        }
    }
}

export { }