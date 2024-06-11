<template>
    <div>
        <div>
            <button class="btn" @click="load"> load </button>
            {{ test }}
        </div>
    </div>
</template>

<script>
    import Api from '@/api/api'

    export default {
        name: "NavTop",
        data() {
            return {
                test: null
            }
        },
        methods:{
            async load() {
                this.test = await Api.load('/api/abstract-factory');
            }
        }
    }
</script>

<style scoped>

.nav>* {
        margin: 0 10px;
    }
</style>
