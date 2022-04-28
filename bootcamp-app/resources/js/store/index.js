import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

import { mapGetters } from 'vuex'

export default new Vuex.Store({
    state: {
        products : [],
        cartItems: [],
        totalPrice: 0,
        totalCart: 0
    },

    getters: {
        products: state => state.products,
        cartItems: state => state.cartItems,
        totalPrice: state => state.totalPrice,
        totalCart: state => state.totalCart,
    },

    mutations: {
        setProduct(state, products){
            state.products = products
        },
        UPDATE_PRODUCT (state, payload) {
            state.products = [...payload]
        },
        ADD_CART: (state, payload) => {
            state.cartItems.push({
                id: payload.id,
                name : payload.name,
                description : payload.description,
                stock: payload.stock,
                price: payload.price,
                quantity: 1,
            })
        },
        UPDATE_CART: (state, payload) => {
            let index = state.cartItems.indexOf(payload);
            state.cartItems.splice(index, 1, {
                    id: payload.id,
                    name : payload.name,
                    description : payload.description,
                    stock: payload.stock,
                    price: payload.price,
                    quantity: payload.quantity,
                });
                if (payload.quantity<=0) {
                    state.cartItems.splice(index,1)
                }
        },
        DELETE_PRODUCT (state, payload) {
            state.products.splice(payload, 1)
        }
    },

    actions: {
        add: ({state, commit}, payload) => {
            let cartItem = state.cartItems.find(item => item.id === payload.id)
            if (!cartItem) {
                commit('ADD_CART', payload)
            } else {
                cartItem.quantity++
                commit('UPDATE_CART', cartItem)
            }
        },
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
        // masih kosong
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
