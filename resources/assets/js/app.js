
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('sweetalert');

import { dropdown, datepicker }  from 'vue-strap';


Vue.component('UploadImage', require('./components/UploadImage.vue'));
Vue.component('LocationPicker', require('./components/LocationPicker.vue'));
Vue.component('SocialMediaInput', require('./components/SocialMediaInput.vue'));

import VueGmaps from 'vue-gmaps'

const VueGoogleMaps = require('vue2-google-maps');

Vue.use(VueGoogleMaps, {
    installComponents: true,
    load: {
        key: 'AIzaSyCl2kU_z6xAOhTlO5PQ7EgvUpkNF9Ebb8g',
        libraries: 'places'
    }
});



/*
Vue.use(VueGmaps, {
    key: 'AIzaSyCl2kU_z6xAOhTlO5PQ7EgvUpkNF9Ebb8g'
});
*/


const app = new Vue({
    el: '#app',
    data: {
        vm: {
            searchPlace: '',
            location: {}
        }
    },
    components: {
        'dropdown': dropdown,
        'date-picker': datepicker
    }
});
