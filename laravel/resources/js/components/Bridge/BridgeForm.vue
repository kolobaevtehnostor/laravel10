<template>
    <div class="main">
        <div class="main-form">
            <div class="form-block">
                <div>
                    Стиль сообщения <br>
                    <select v-model="styleName" @change="changeForm">
                        <option v-for="styleName in infoBridgeNotificationStyles" :value="styleName">{{ styleName }}</option>
                    </select>
                </div>

                <div>
                    Тип сообщения  <br>
                    <select v-model="typeName" @change="changeForm">
                        <option v-for="typeName in infoBridgeNotificationTypes" :value="typeName">{{ typeName }}</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapGetters, mapActions } from 'vuex'

export default {
    name: 'BridgeForm',
    data() {
        return {
            styleName: null,
            typeName: null
        }
    },
    computed: {
        ...mapGetters([
            'infoBridgeNotificationStyles',
            'infoBridgeNotificationTypes'
        ])
    },
    methods: {
        ...mapActions(['loadBridgeNotification']),
        changeForm() {
            if (! this.styleName || ! this.typeName) {
                return
            }

            this.loadBridgeNotification({
                typeName: this.typeName,
                styleName: this.styleName
            });
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
        align-items: center;

    }
    .form-block input {
        height: 25px;
        margin: 10px;

    }

    .form-block select {
        height: 30px;
        width: 200px;
        border-radius: 4px;
    }

    .form-block>div {
        margin: 10px;
    }
</style>
