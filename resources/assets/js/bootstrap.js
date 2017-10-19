import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import Form from './utilities/Form';

window.Vue = Vue;
Vue.use(VueRouter);

window.axios = axios;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};

window.Form = Form;
