import Vue from 'vue'
import VueRouter from 'vue-router'
import Welcome from '../components/Welcome'

Vue.use(VueRouter)

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
        name: 'product',
        component: () => import(/* webpackChunkName: "product" */ '../components/Product.vue'),
        // meta: { login: true }
    },
    {
        path: '/cart',
        name: 'cart',
        component: () => import(/* webpackChunkName: "cart" */ '../components/Cart.vue'),
    },
    // {
    //     path: '*',
    //     redirect: '/'
    // }
]

const router = new VueRouter ({
    mode: 'history',
    routes,
})

export default router
