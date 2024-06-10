<template>
    <div id="nav">
        <div class="logo">
            Паттерны <br> проектирования
        </div>
        <div class="nav">
            <router-link to="/">
                Home
            </router-link> 
            <router-link to="/abstract-factory">
                Абстрактная фабрика
            </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NavTop"
    }
</script>

<style scoped>
    #nav {
        position: static;
        display: flex;
        align-items: center;
        width: 100%;
        margin: 0 10px;
    }

    .logo {
        font-weight: bold;
        font-size: 22px;
    }

    .nav {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    
    .nav>* {
        margin: 0 10px;
    }
</style>