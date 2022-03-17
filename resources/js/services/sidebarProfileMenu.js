import { ref, computed, onMounted } from 'vue'
import { onClickOutside, onKeyStroke } from "@vueuse/core";
import { useStore } from "vuex";

export default function useSidebarProfileMenu() {
    const store = useStore();
    const profileMenu = ref(null);
    const isProfileMenuOpen = ref(false);
    const notificationsMenu = ref(false);
    const isNotificationsMenuOpen = ref(false);
    const sidebar = ref(null);
    const isSidebarOpen = ref(computed(() => store.getters.get_sidebar_state));

    function openSidebar() {
        store.commit('open_sidebar');
    }

    function closeSidebar() {
        store.commit('close_sidebar');
    }

    function closeProfileMenu() {
        isProfileMenuOpen.value = false;
    }

    function closeNotificationMenu() {
        isNotificationsMenuOpen.value = false;
    }

    onClickOutside(sidebar, (event) => {
        if (isSidebarOpen.value) {
            closeSidebar()
        }
    });

    onClickOutside(profileMenu, () => {
        closeProfileMenu()
    });

    onClickOutside(notificationsMenu, () => {
        closeNotificationMenu()
    });

    onKeyStroke('Escape', (e) => {
        closeSidebar()
        closeProfileMenu()
        closeNotificationMenu()
    });

    onMounted(() => {
        closeSidebar()
    });

    return {
        profileMenu,
        isProfileMenuOpen,
        notificationsMenu,
        isNotificationsMenuOpen,
        sidebar,
        isSidebarOpen,
        openSidebar,
        closeSidebar
    }
}