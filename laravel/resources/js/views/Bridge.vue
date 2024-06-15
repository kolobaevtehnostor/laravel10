<template>
    <BridgeForm/>
    <BridgeRequest/>
</template>

<script>

import { mapActions } from 'vuex'

import BridgeForm from '@/components/Bridge/BridgeForm.vue'
import BridgeRequest from '@/components/Bridge/BridgeRequest.vue'

export default {
    name: 'Bridge',
    components: {
        BridgeForm,
        BridgeRequest
    },
    methods: {
        ...mapActions(['loadBridgeNotificationInfo'])
    },
    mounted () {
        this.loadBridgeNotificationInfo();
    }
}
</script>

<style scoped>

</style>
