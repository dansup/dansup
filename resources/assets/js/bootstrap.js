try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch (e) {}

const warningTitleCSS = 'color:red; font-size:60px; font-weight: bold; -webkit-text-stroke: 1px black;';
const warningDescCSS = 'font-size: 18px;';
console.log('%cHi!', warningTitleCSS);
console.log("%cThis site is open source. https://github.com/dansup/dansup", warningDescCSS);