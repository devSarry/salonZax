
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('sweetalert');


//require('vuikit');
//require('./htm5-spectral/main');

import { dropdown, datepicker }  from 'vue-strap';
import { UploadImage } from './components/UploadImage.vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */




Vue.component('UploadImage', require('./components/UploadImage.vue'));
Vue.component('hero', require('./components/Hero.vue'));
//Vue.component('upload-image', require('./components/UploadImage.vue'));



const app = new Vue({
    el: '#app',
    components: {
        'dropdown': dropdown,
        'upload-image': UploadImage,
        'date-picker': datepicker
    }
});
