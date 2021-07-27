import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home  from './pages/Home.vue';
import Doctors from './pages/Doctors';

const router = new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/doctors',
            name: 'doctors',
            component: Doctors
        },
    ]
})







export default router;
