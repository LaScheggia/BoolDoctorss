/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap'); // spostato in admin.js
window.Vue = require('vue');
console.log('hello guest');


const app = new Vue({
    el: '#app',
});
