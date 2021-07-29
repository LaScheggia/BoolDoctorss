import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home  from './pages/Home.vue';
import Doctors from './pages/Doctors';
import Profile from './pages/Profile.vue';
import Specializations from './pages/Specializations.vue'
import Error404 from './pages/Error404.vue';

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
        {
            path: '/profile/:id', //parametro variabile
            name: 'profile',
            component: Profile
        },
        {
            path: '/specializations/:spec', //parametro variabile
            name: 'specializations',
            component: Specializations
        },
/*         {
            path: '/*',
            name: 'error404',
            component: Error404
        } */
    ]
})







export default router;
