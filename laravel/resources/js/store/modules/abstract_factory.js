import Api from "@/api/api"

export default {
    state: {
        factories: []
    },
    actions: {
        // Получаем фабрики от сервера
        async loadFactories(context, { query }) {
            try {
                const dataRequest = await Api.load('/api/abstract-factory?entity=' + query)
                context.commit('updateFactories', dataRequest)
            } catch (error) {
                alert('Отсутствует текст');
            }
        }
    },
    mutations: {
        // Обновляем состояние массива фабрик
        updateFactories(state, factories) {
            state.factories = factories.data
        }
    },
    getters: {
        // Возвращаем фабрики
        allFactories(state) {
            return state.factories
        }
    }
}
