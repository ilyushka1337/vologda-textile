export default () => ({
    lang: localStorage.getItem('siteLang'),
    async init() {
        await this.loadScript()
        this.translateInit()
    },

    async loadScript() {
        return new Promise((resolve, reject) => {
            const script = document.createElement('script')
            script.src = `https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=${this.lang}&widgetTheme=light&autoMode=true`
            script.addEventListener('load', resolve)
            document.head.appendChild(script)
        })
    },

    setLang(lang) {
        this.lang = lang
        localStorage.setItem('siteLang', lang)
    },

    translateInit() {

    }
})

// /*!***************************************************
//  * yatranslate.js v1.0.0
//  * https://Get-Web.Site/
//  * author: Vitalii P.
//  *****************************************************/

// const yatranslate = {
//     /* Original language */
//     lang: "ru",
//     /* The language we translate into on the first visit */
//     /* Язык, на который переводим при первом посещении */
//     langFirstVisit: 'en',
// };

// document.addEventListener('DOMContentLoaded', yaTranslateInit)

// function yaTranslateInit() {

//     if (yatranslate.langFirstVisit && !localStorage.getItem('yt-widget')) {
//         /* Если установлен язык перевода для первого посещения и в localStorage нет yt-widget */
//         /* If the translation language is installed for the first visit and in localStorage no yt-widget */
//         yaTranslateSetLang(yatranslate.langFirstVisit);
//     }

//     // Подключаем виджет yandex translate
//     // Connecting the yandex translate widget
//     let script = document.createElement('script');
//     script.src = `https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=${yatranslate.lang}&widgetTheme=light&autoMode=false`;
//     script.addEventListener('load', function(event) {
//         setTimeout(disablePreloader, 1000)
//     })
//     document.getElementsByTagName('head')[0].appendChild(script);

//     // Получаем и записываем язык на который переводим
//     // We get and write down the language into which we translate
//     // let code = yaTranslateGetCode();

//     // Показываем текущий язык в меню
//     // Show the current language in the menu
//     // yaTranslateHtmlHandler(code);

//     // Вешаем событие клик на флаги
//     // We hang the event click on the flags
//     yaTranslateEventHandler('click', '[data-ya-lang]', function (el) {
//         yaTranslateSetLang(el.getAttribute('data-ya-lang'));
//         // Перезагружаем страницу
//         // Reloading the page
//         window.location.reload();
//     })
// }

// function disablePreloader(){
//     const preloader = document.querySelector('#language-preloader')
//     if (preloader)
//         preloader.remove()
// }

// function yaTranslateSetLang(lang) {
//     // Записываем выбранный язык в localStorage объект yt-widget 
//     // Writing the selected language to localStorage 
//     localStorage.setItem('yt-widget', JSON.stringify({
//         "lang": lang,
//         "active": true
//     }));
// }

// function yaTranslateGetCode() {
//     // Возвращаем язык на который переводим
//     // Returning the language to which we are translating
//     return (localStorage["yt-widget"] != undefined && JSON.parse(localStorage["yt-widget"]).lang != undefined) ? JSON.parse(localStorage["yt-widget"]).lang : yatranslate.lang;
// }

// function yaTranslateHtmlHandler(code) {
//     // Получаем язык на который переводим и производим необходимые манипуляции с DOM
//     // We get the language to which we translate and produce the necessary manipulations with DOM 
//     document.querySelector('[data-lang-active]').innerHTML = `<img class="lang__img lang__img_select" src="${window.TPL_PATH}/translate/images/lang/lang__${code}.png" alt="${code}">`;
//     document.querySelector(`[data-ya-lang="${code}"]`).remove();
// }

// function yaTranslateEventHandler(event, selector, handler) {
//     document.addEventListener(event, function (e) {
//         let el = e.target.closest(selector);
//         if (el) handler(el);
//     });
// }