import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

import { mapGetters } from 'vuex'

export default new Vuex.Store({
    state: {
        toDo: [
            {
                title: "Menyapu"
            },
            {
                title: "Memasak"
            },
            {
                title: "Mengepel"
            }
        ]
    },
    getters: {
        getToDo (state) {
            return state.toDo
        }
    },
    mutations: {
        UPDATE_PRODUCT (state, payload) {
            state.toDo = [...payload]
        },
        ADD_PRODUCT (state, payload) {
            state.toDo.push(payload)
        },
        DELETE_PRODUCT (state, payload) {
            state.toDo.splice(payload, 1)
        }
    },
    actions: {
        getList (context) {
            let url = 'api/get_product'
            axios.get(url).then((response) => {
                context.commit('UPDATE_PRODUCT', response.data)
            })
        },
        addList (context, payload) {
            let url = 'api/add_product'
            axios.post(url, payload).then((response) => {
                context.commit('UPDATE_PRODUCT', response.data)
            })
            // context.commit('ADD_TODO', payload)
        },
        deleteList (context, payload) {
            context.commit('DELETE_PRODUCT', payload)
        }
    },

    modules: {
        // masih kosong
    },
    computed: {
        ...mapGetters({
            toDoList: 'getToDo'
        })
    },
    mounted() {
        console.log("component mounted.")
    },
    methods: {
        addList(inputForm) {
            let newList = {
                title: inputForm
            }
            // this.list.push(newList)
            this.$store.dispatch('addList', newList)
        },
        deleteList(index){
            // this.list.splice(index,1)
            this.$store.dispatch('deleteList', index)
        }
    },
})
