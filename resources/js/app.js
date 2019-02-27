
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
Vue.use(require('vue-resource'));
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



//Vue.component('example-component', require('./components/BaseTemplate.vue'));
Vue.component('InfiniteLoading', require('vue-infinite-loading'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('flash',require('./components/Flash.vue'));
import carousel from 'vue-owl-carousel';

export default {
    name: "carousel",
    components: { carousel },
}
Vue.component('carousel',require('vue-owl-carousel'));
const app = new Vue({
    el: '#app'
});

