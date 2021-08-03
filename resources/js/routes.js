import Vue from 'vue';

import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home  from './pages/Home.vue';
import Doctors from './pages/Doctors';
import Profile from './pages/Profile.vue';
import Contacts from './pages/Contacts.vue';
import Confirmation from './pages/Confirmation.vue';
import Confirmation2 from './pages/Confirmation2.vue';
import Team from './pages/Team.vue';
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
            path: '/contacts',
            name: 'contacts',
            component: Contacts
        },
        {
            path: '/confirmation',
            name: 'confirmation',
            component: Confirmation
        },
        {
            path: '/confirmation2',
            name: 'confirmation2',
            component: Confirmation2
        },
        {
            path: '/team',
            name: 'team',
            component: Team
        },
        {
            path: '/*',
            name: 'error404',
            component: Error404
        }
    ]
})







export default router;
