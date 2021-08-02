
// require('./bootstrap'); // spostato in admin.js
window.Vue = require('vue');

import Vue from "vue";
import App from './App.vue';
import router from './routes';
import Vuesax from 'vuesax';
import 'vuesax/dist/vuesax.css'
import VueCarousel from 'vue-carousel';


import 'material-icons/iconfont/material-icons.css';

Vue.config.productionTip = false
Vue.use(Vuesax, {
    // options here
  })
Vue.use(VueCarousel);
/* const app = new Vue({
    el: '#app',
    router,
    render: h => h(App)
}); */

new Vue({
    Vuesax,
    router,
    render: h => h(App),
  }).$mount('#app');

