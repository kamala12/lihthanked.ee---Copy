require('./bootstrap');

window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";
window.Vue = require('vue');

import Vue from 'vue';

import Buefy from 'buefy';

Vue.use(Buefy);

Vue.component('slugWidget', require('./components/slugWidget'))

const app = new Vue({ el: '#app', data: {} });
//Vue.component('example-component', require('./components/ExampleComponent.vue'));

