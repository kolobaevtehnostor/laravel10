<template>
    <div>
        <div class="main">
            <div class="main-form">
                <div class="form-block">
                    <input type="text" v-model="query">
                    <button @click="clickLoadFactories">Создать</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
    name: 'AbstractFactoryForm',
    data() {
        return {
            query: 'users'
        }
    },
    methods: {
        ...mapActions(['loadFactories']),
        clickLoadFactories () {
            if (! this.query) {
                alert('Введите текст')
                return
            }
            this.loadFactories({query: this.query});
        }
    }
}
</script>

<style scoped>
    .form-block {
        max-width: 600px;
        height: 100px;
        margin: auto;
        border: 1px solid #ccc;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        flex-direction: column;

    }
    .form-block input {
        height: 25px;
        margin: 10px;

    }

    .form-block button {
        height: 25px;
        margin: 10px auto;
        width: 180px;
    }
</style>
