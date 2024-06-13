<template>
    <div>
        <div class="main">
            <AbstractFactoryForm/>
            <AbstractFactoryRequest/>
        </div>
    </div>
</template>

<script>
import AbstractFactoryRequest from '@/components/AbstractFactory/AbstractFactoryRequest.vue'
import AbstractFactoryForm from '@/components/AbstractFactory/AbstractFactoryForm.vue'

export default {
    name: 'AbstractFactory',
    components: {
        AbstractFactoryRequest,
        AbstractFactoryForm
    },
}
</script>

<style scoped>
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
