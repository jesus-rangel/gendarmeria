import Vue from 'vue'
import axios from 'axios'
Vue.use(VueAxios, axios)
window.Vue = require('vue');
import VueAxios from 'vue-axios'

Vue.component('client-search', require('./components/ClientSearch.vue').default);

const app = new Vue({
  el: '#app',
});