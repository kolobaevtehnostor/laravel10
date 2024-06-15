import Api from "@/api/api"

export default {
    state: {
        notification: null,
        styles: [],
        types: [],
    },
    actions: {
        // Получаем сообщение
        async loadBridgeNotification(context, {typeName, styleName}) {
            try {
                const dataRequest = await Api.load('/api/bridge?type=' + typeName +'&style=' + styleName)
                context.commit('updateBridgeNotification', dataRequest)
            } catch (error) {
                alert('Отсутствует текст');
            }
        },
        // Получаем информацию о сообщениях
        async loadBridgeNotificationInfo(context) {
            try {
                const dataRequest = await Api.load('/api/bridge/info')
                context.commit('updateBridgeNotificationStyles', dataRequest.data.styles)
                context.commit('updateBridgeNotificationTypes', dataRequest.data.types)
            } catch (error) {
                alert('Отсутствует информация');
            }
        }
    },
    mutations: {
        // Обновляем состояние сообщение
        updateBridgeNotification(state, notification) {
            state.notification = notification.data
        },
        // Обновляем состояние сообщение
        updateBridgeNotificationStyles(state, styles) {
            state.styles = styles
        },
        // Обновляем состояние типы
        updateBridgeNotificationTypes(state, types) {
            state.types = types
        }
    },
    getters: {
        // Возвращаем сообщение
        allBridgeNotification(state) {
            return state.notification
        },
        // Возвращаем все варианты стилей
        infoBridgeNotificationStyles(state) {
            return state.styles
        },
        // Возвращаем все варианты типов
        infoBridgeNotificationTypes(state) {
            return state.types
        }
    }
}
