<template>
    <div>
        <h2>Welcome to My App</h2>
        <ul>
            <li><router-link to="/">Welcome</router-link></li>
            <li><router-link to="/todo">To Do Apps</router-link></li>
            <li><router-link to="/product">List Product</router-link></li>
        </ul>
        <router-view></router-view>
    </div>
</template>
