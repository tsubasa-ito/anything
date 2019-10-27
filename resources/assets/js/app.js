require('./bootstrap');

window.Vue = require('vue');

// VueRouter
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// VueAxios
import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

// Muse-UI
import MuseUI from 'muse-ui';
import 'muse-ui/dist/muse-ui.css';
Vue.use(MuseUI);

// Component
import App from './App.vue';
import Index from './Index.vue';
import Create from './Create.vue';

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const routes = [
    {
        name: 'Index',
        path: '/',
        component: Index
    },
    {
        name: 'Create',
        path: '/food/create',
        component: Create
    },
];

const router = new VueRouter({
    mode: 'history',
     routes: routes
});

const app = new Vue(
    Vue.util.extend(
        { router }, App
    )
).$mount('#app');