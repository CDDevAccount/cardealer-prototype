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
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('catalogue-component', require('./components/CatalogueComponent.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading').default);

Vue.component('button-counter', {
  data: function () {
    return {
      count: 0
    }
  },
  template: '<button v-on:click="count++">You clicked me {{ count }} times.</button>'
})


import vSelect from 'vue-select'
Vue.component('v-select', vSelect)
import Swatches from 'vue-swatches'

import circleslider from 'vue-circle-slider';
Vue.use(require('vue-circle-slider'));
//Vue.component('welcome', require('./components/Welcome.vue').default);
Vue.component('swatch', require('./components/SwatchTemplate.vue').default);

// Vue.component('flash',require('./components/Flash.vue'));
import carousel from 'vue-owl-carousel';
import Geolocation from 'vue-component-geolocation';


Vue.component('carousel',require('vue-owl-carousel'));


  // Import the styles too, globally
  import "vue-swatches/dist/vue-swatches.min.css"

export default {
    name: "carousel",
    components: { carousel },
    name:"circleslider",
    components:{circleslider},
    data: {
      val1: 10
    },
    name: "swatches",
    components: { Swatches }, 
    data () {
      return {
        color: '#2e3192',
        colors: ['#F64272', '#F6648B', '#F493A7', '#F891A6', '#FFCCD5', '']
      }
    }
}

const app = new Vue({
    el: '#app',
    data: {
      selected: [],
      makes :[],
      bodies : [],
      colors:[],
      fuels:[],
      color : '#2e3192',
      colors: ['#F64272', '#F6648B', '#F493A7', '#F891A6', '#FFCCD5', '']
    }
});
