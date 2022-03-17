export const sidebarDarkMode = {
    state: {
        darkMode: false,
        isSidebarOpen: false,
    },
    mutations: {
        toggle_dark_mode(state) {
            state.darkMode = !state.darkMode;
        },
        toggle_sidebar(state) {
            state.isSidebarOpen = !state.isSidebarOpen;
        },
        open_sidebar(state) {
            state.isSidebarOpen = true;
        },
        close_sidebar(state) {
            state.isSidebarOpen = false;
        }
    },

    getters: {
        get_dark_mode_state(state) {
            return state.darkMode;
        },
        get_sidebar_state(state) {
            return state.isSidebarOpen;
        }
    }
};