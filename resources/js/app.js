
// require('./bootstrap'); // spostato in admin.js
window.Vue = require('vue');

import Vue from "vue";
import App from './App.vue';
import router from './routes';
import Vuesax from 'vuesax';

import 'vuesax/dist/vuesax.css'

import 'material-icons/iconfont/material-icons.css';


Vue.use(Vuesax, {
    // options here
  })



Vue.config.productionTip = false




const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
});

/* new Vue({
    Vuesax,
    router,
    render: h => h(App),
  }).$mount('#app') */

