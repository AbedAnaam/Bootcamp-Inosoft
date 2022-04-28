<template>
    <div>
        <h2>Product List</h2>
        <table class="table table-hover table-responsive">
            <thead class="table-light">
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(product,index) in products" :key="index">
                    <td>{{ product.name }}</td>
                    <td>{{ product.description }}</td>
                    <td>{{ product.stock }}</td>
                    <td>{{ product.price }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm" type="button" @click="addCart">
                            Add to Cart
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { mapGetters } from 'vuex';
import { mapActions } from 'vuex';

export default {
    computed: {
        // this.$store.getters.products,
        ...mapGetters({
            'products': 'products',
            'cartItems' : 'cartItems',
        })
    },
    created() {
        this.$store.dispatch('getProduct')
            .then((response) => {
                console.log('your result: ', response)
            })
            .catch((error) => {
                console.log('error: ', error)
            })
    },
    methods: {
        ...mapActions({
            add: 'add'
        }),
        addCart() {
            // alert('addToCart')
            // this.$store.dispatch('add', this.products)
            this.add(this.cartItems)
        }
    }
}
</script>

<style>

</style>
