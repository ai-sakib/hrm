import { ref, computed } from 'vue'
import { useStore } from 'vuex'

export default function useDarkMode() {
    const store = useStore();
    const dark = ref(computed(() => store.getters.get_dark_mode_state));

    function toggle_dark_mode() {
        store.commit("toggle_dark_mode");
    }

    return {
        dark,
        toggle_dark_mode,
    }
}