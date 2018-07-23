/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/**
 * Register BootstrapVue plugin
 */

import Vue from 'vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import {routes} from "./routes";

Vue.use(VueRouter, BootstrapVue);

const router = new VueRouter({
    routes,
    mode: 'history'
})

Vue.component('home', require('./components/Home.vue'));
Vue.component('profile', require('./components/Profile.vue'));
Vue.component('portfolio', require('./components/Portfolio.vue'));
Vue.component('resume', require('./components/Resume'));
Vue.component('contact', require('./components/Contact'));

const app = new Vue({
    el: '#app',
    router
});
