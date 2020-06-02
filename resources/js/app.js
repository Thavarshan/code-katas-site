require('./bootstrap');

window.Vue = require('vue');

Vue.config.productionTip = false;

window.events = new Vue();

window.flash = function(message, level = 'success') {
    window.events.$emit('flash', { message, level });
};

// Example Component
Vue.component("prime-factors", require("./components/PrimeFactors.vue").default);
Vue.component("roman-numerals", require("./components/RomanNumerals.vue").default);
Vue.component("string-calculator", require("./components/StringCalculator.vue").default);
Vue.component("tennis-game", require("./components/TennisGame.vue").default);
Vue.component("fizz-buzz", require("./components/FizzBuzz.vue").default);

const app = new Vue({
    el: '#app',
});
