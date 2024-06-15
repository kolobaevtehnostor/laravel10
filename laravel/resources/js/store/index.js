import Vuex from 'vuex'

import abstract_factory from './modules/abstract_factory'
import bridge  from './modules/bridge'

export default new Vuex.Store({
    modules: {
        abstract_factory,
        bridge,
    }
})
