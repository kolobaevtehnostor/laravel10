<template>
    <div class="factories">
        <div v-for="(item, index) in allFactories">
            <div class="factories-block">
                <h2> Фабрика {{ index }} </h2>
                <div>
                    <p> Методы контроллера: </p>
                    <div v-for="method in item.methods" >
                        {{ method.action }}
                    </div>
                    <p> Эндпоинты: </p>
                    <div v-for="url in item.urls" class="endpoint">
                            <span>{{ url.method }}:</span>  {{url.url}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { mapGetters} from "vuex"

export default {
    name: 'AbstractFactoryRequest',
    props: {
        dataRequest: Object,
        title: String
    },
    computed: {
        ...mapGetters(['allFactories'])
    }
}
</script>

<style scoped>
    .factories {
        display: flex;
        justify-content: center;
    }
    .factories-block {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
    }
    .endpoint {
        border-bottom: 1px solid #ccc;
        display: flex;
        justify-content: space-between;
    }

</style>
