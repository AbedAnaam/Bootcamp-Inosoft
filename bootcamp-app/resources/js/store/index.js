import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import cart from '../store/cart'

Vue.use(Vuex)

import { mapGetters } from 'vuex'

export default new Vuex.Store({
    state: {
        products : [],
        totalPrice: 0,
        totalCart: 0
    },

    getters: {
        products: state => state.products,
        totalPrice: state => state.totalPrice,
        totalCart: state => state.totalCart,
    },

    mutations: {
        UPDATE_PRODUCT (state, payload) {
            state.products = [...payload]
        },
        DELETE_PRODUCT (state, payload) {
            state.products.splice(payload, 1)
        }
    },

    actions: {
        getProduct (context) {
            let url = '/api/get_product'
            axios.get(url).then((response) => {
                console.log(response.data);
                context.commit('UPDATE_PRODUCT', response.data)
            });
        },
        addProduct (context, payload) {
            let url = '/api/add_product'
            axios.post(url, payload).then((response) => {
                context.commit('ADD_PRODUCT', response.data)
            })
            // context.commit('ADD_TODO', payload)
        },
        deleteProduct (context, payload) {
            context.commit('DELETE_PRODUCT', payload)
        }
    },

    modules: {
        cart,
    },

    computed: {
        ...mapGetters({
            productList: 'getProduct'
        })
    },

    mounted() {
        console.log("component mounted.")
    },

    methods: {
        // addList(inputForm) {
        //     let newList = {
        //         title: inputForm
        //     }
        //     // this.list.push(newList)
        //     this.$store.dispatch('addList', newList)
        // },
        // deleteList(index){
        //     // this.list.splice(index,1)
        //     this.$store.dispatch('deleteList', index)
        // }
        // masih kosong
    },
})
