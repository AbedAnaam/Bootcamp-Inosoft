export default {
    namespaced: true,
    state: {
        cartItems: [],
    },
    mutations: {
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
        set: (state, payload) => {
            state.cartItems = payload
        },
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
    },
    getters: {
        cartItems: state => state.cartItems,
    }
}
