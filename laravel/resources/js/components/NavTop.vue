<template>
    <div class="main">
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
                <router-link to="/bridge">
                    Мост
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "NavTop"
    }
</script>

<style scoped>
    .main {
        background: #efefef;
    }

    #nav {
        position: static;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 5px 0;
        height: 45px;
    }

    .logo {
        font-weight: bold;
        font-size: 18px;
        padding: 0 20px;
        position: absolute;
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
