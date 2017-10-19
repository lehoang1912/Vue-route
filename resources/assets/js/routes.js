import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home')
    },

    {
        path: '/about',
        component: require('./views/About')
    },

    {
        path: '/scope-slot',
        component: require('./views/MenuList')
    },

    {
        path: '/vue-subclassing',
        component: require('./views/SubClassing')
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});