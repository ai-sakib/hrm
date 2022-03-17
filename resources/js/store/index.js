import { createStore } from "vuex";
import { sidebarDarkMode } from './modules/sidebarDarkMode';
import createPersistedState from "vuex-persistedstate";

const Store = createStore({
    plugins: [createPersistedState()],
    modules: {
        sidebarDarkMode
    },
});

export default Store;