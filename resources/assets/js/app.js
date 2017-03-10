
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('sweetalert');

import { dropdown, datepicker }  from 'vue-strap';

const VueGoogleMaps = require('vue2-google-maps');

Vue.use(VueGoogleMaps, {
    installComponents: true,
    load: {
        key: 'AIzaSyB3qiU9XQ7jzOnHJsrPcw-FcFy9qSdKKWw',
        libraries: 'places'
    }
});



Vue.component('UploadImage', require('./components/UploadImage.vue'));
Vue.component('LocationPicker', require('./components/LocationPicker.vue'));
Vue.component('SocialMediaInput', require('./components/SocialMediaInput.vue'));
Vue.component('SalonMap', require('./components/SalonMap.vue'));


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
