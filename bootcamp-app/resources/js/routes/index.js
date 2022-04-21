import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Welcome from '../components/Welcome'

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome,
    },
    {
        path: '/todo',
        name: 'ToDo',
        component: () => import(/* webpackChunkName: "todo" */ '../components/toDoComponents.vue'),
    },
    {
        path: '/product',
        name: 'Product',
        component: () => import(/* webpackChunkName: "product" */ '../components/Product.vue'),
    }
]

const router = new VueRouter ({
    mode: 'history',
    routes,
})

export default router
