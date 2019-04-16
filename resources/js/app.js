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
Vue.component('map-component', require('./components/MapComponent.vue').default);
Vue.component('town-component', require('./components/TownsComponent.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading').default);
Vue.component('basic-search', require('./components/BasicSearch.vue').default);

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
Vue.component('swatch', require('./components/SwatchTemplate.vue').default);



import Vue from 'vue'
import * as VueGoogleMaps from 'vue2-google-maps'
 
Vue.use(VueGoogleMaps, {
  load: {
    key: process.env.MIX_GOOGLE_MAPS_API_KEY ,
    libraries: 'places', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)
 
    //// If you want to set the version, you can do so:
    // v: '3.26',
  },
 data: {
    startLocation: {
      lat: 51.446,
      lng: 0.209
    },
    coordinates: {
      0: {
        full_name: 'Spencers Car Sales',
        lat: '52.672139',
        lng: '1.374386'
      },
      1: {
        full_name: 'Delmer Olson',
        lat: '1.285073',
        lng: '52.657238'
      }
    },
    markers:{
      0: {
        full_name: 'Spencers Car Sales',
        lat: '52.672139',
        lng: '1.374386'
      },
      1: {
        full_name: 'Delmer Olson',
        lat: '1.285073',
        lng: '52.657238'
      }
    },
    infoPosition: null,
    infoContent: null,
    infoOpened: false,
    infoCurrentKey: null,
    infoOptions: {
      pixelOffset: {
        width: 0,
        height: -35
      }
    },
  },
  methods: {
    getPosition: function(marker) {
      return {
        lat: parseFloat(marker.lat),
        lng: parseFloat(marker.lng)
      }
    },
    toggleInfo: function(marker, key) {
      this.infoPosition = this.getPosition(marker);
      this.infoContent = marker.full_name;
      if (this.infoCurrentKey == key) {
        this.infoOpened = !this.infoOpened;
      } else {
        this.infoOpened = true;
        this.infoCurrentKey = key;
      }
    }
  }
  //// If you intend to programmatically custom event listener code
  //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
  //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
  //// you might need to turn this on.
  // autobindAllEvents: false,
 
  //// If you want to manually install components, e.g.
  //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  // installComponents: true,
})
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
