
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('top-bar', require('./components/TopBar.vue'));
Vue.component('welcome', require('./components/Welcome.vue'));
Vue.component('mission', require('./components/Mission.vue'));
Vue.component('musings', require('./components/Musings.vue'));
const app = new Vue({
    el: '#app'
});

$(document).foundation();
