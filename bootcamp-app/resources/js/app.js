import Vue from 'vue'
import App from './layouts/App'
import store from './store/index'
import router from './routes/index'
import 'mdb-vue-ui-kit/css/mdb.min.css';

require('./bootstrap');

window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('to-do', require('./components/toDoComponents.vue').default);
Vue.component('input-form', require('./components/InputFormComponent.vue').default);
Vue.component('list', require('./components/ListComponent.vue').default);
Vue.component('button-form', require('./components/ButtonComponent.vue').default);
Vue.component('navbar', require('./components/Navbar.vue'). default);

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
});
