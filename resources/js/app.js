require('./bootstrap');

window.Vue = require('vue');

Vue.config.productionTip = false;

window.events = new Vue();

window.flash = function(message, level = 'success') {
    window.events.$emit('flash', { message, level });
};

// Example Component
Vue.component("prime-factors", require("./components/PrimeFactors.vue").default);

const app = new Vue({
    el: '#app',
});
