<template>
    <div>
        <h1>Home Page</h1>

        <button @click="load" v-if="migrations.length === 0">Load data from server</button>

        <div class="server-response" v-if="migrations.length > 0">
            <h2>Data from server:</h2>
            <ul>
                <li v-for="item in migrations" :key="item.id">{{ item.migration }}</li>
            </ul>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
axios.defaults.withCredentials = true

import {ref} from "vue";

export default {
    name: 'Hello',

    setup() {

        const migrations = ref([])

        function onSuccess(response) {
            migrations.value = response.data;
        }

        function load() {
            axios.get('/api/migration')
                .then(onSuccess)
                .catch((error) => { alert(`Error ${error.message}`) })
        }

        return {
            load,
            migrations
        }
    }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
    h3 {
        margin: 40px 0 0;
    }
    a {
        color: #42b983;
    }
    ul {
        text-align: start;
    }
    button {
        font-size: 1.1rem;
        cursor: pointer;
    }
    .server-response {
        display: inline-block;
    }
    .server-response h2 {
        text-align: start;
        margin-top: 0;
    }
</style>