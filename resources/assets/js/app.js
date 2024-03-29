
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import bootstrap from 'bootstrap';
import BootstrapVue from 'bootstrap-vue'

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('home-editor', require('./components/HomeEditorComponent.vue'));
Vue.component('contact-editor', require('./components/ContactEditorComponent.vue'));
Vue.component('add-retailer', require('./components/AddRetailerComponent.vue'));


Vue.use(BootstrapVue);

const app = new Vue({
    el: '#app'
});