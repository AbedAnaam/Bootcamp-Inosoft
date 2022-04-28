<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Tugas 4</a>
            <button
                class="navbar-toggler"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <router-link to="/" class="nav-link active"> Home </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/todo" class="nav-link"> ToDo Apps </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/product" class="nav-link"> Product List </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/cart">
                        Shopping Cart
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge bg-danger ml-1">{{ totalCart }}</span>
                    </router-link>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</template>

<script>
import { mapGetters } from 'vuex';
export default {
    computed: {
        ...mapGetters([
            'totalCart'
        ])
    }
}
</script>

<style>

</style>
