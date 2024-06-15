<template>
    <div v-if="allBridgeNotification" class="block" :class="allBridgeNotification.style">
        <div>
            {{ allBridgeNotification.message }}
        </div>
    </div>
</template>

<script>

import { mapGetters } from 'vuex'

export default {
    name: 'BridgeRequest',
    data() {
        return {
            classStyle: 'default'
        }
    },
    computed: {
        ...mapGetters(['allBridgeNotification'])
    },
}
</script>

<style scoped>
    .block {
        border: 1px solid #ccc;
        display: flex;
        justify-content: center;
        margin: 10px auto;
        padding: 10px;
        max-width: 600px;
        border-radius: 4px;
    }

    .default {
        background: #cbd5e0;
    }

    .info {
        background: mediumturquoise;
    }

    .danger {
        background: #ef4444;
    }

    .default {
        border: 1px solid #ccc;
        display: flex;
        justify-content: center;
        margin: 10px auto;
        padding: 10px;
        max-width: 600px;
    }
</style>
