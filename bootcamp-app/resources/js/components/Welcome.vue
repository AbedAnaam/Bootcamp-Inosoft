<template>
    <div>
        <h2>Welcome to My App</h2>
        <ul>
            <li><router-link to="/" style="text-decoration: none">Welcome</router-link></li>
            <li><router-link to="/todo" style="text-decoration: none">To Do Apps</router-link></li>
            <li><router-link to="/product" style="text-decoration: none">Product List</router-link></li>
        </ul>
        <router-view></router-view>
    </div>
</template>
