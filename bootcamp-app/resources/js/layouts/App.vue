<template>
    <div class="container">
        <div class="layout">
            <div class="menu">
                <ul class="list-group list-group-horizontal-lg">
                    <li class="list-group-item"><router-link to="/"> Welcome </router-link></li>
                    <li class="list-group-item"><router-link to="/todo"> ToDo Apps </router-link></li>
                    <li class="list-group-item"><router-link to="/product"> Product List </router-link></li>
                </ul>
            </div>
            <div class="container">
                <div class="col-lg-12 col-md-6 col-sm-3">
                    <div class="row p-4">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    body {
        background: #f5f5f5;
    }
    .layout {
        margin: 0 auto;
        padding-top: 20px;
    }
    .menu{
        margin: 10;
    }
    .menu ul {
        padding: 20;
    }
    .menu ul li {
        display: inline-block;
        padding: 8px 16px;
        margin-right: 5px;
        background: #008afc;
        border-radius: 2px;
    }
    .menu ul li a {
        color: #ffffff;
        font-size: 16px;
        text-decoration: none;
    }
    .menu ul li a:hover {
        color: #000000;
    }
</style>
