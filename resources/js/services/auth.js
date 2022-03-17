import { ref, computed } from "vue";
import { useStore } from "vuex";
import { useRouter } from "vue-router";
import axios from "axios";

export default function useAuth() {
    const store = useStore();
    const router = useRouter();
    const isLoading = ref(false);
    const errors = ref(null);
    const username = computed(() => store.getters.get_current_user ? store.getters.get_current_user.name : null);

    function errorAndLoader(response) {
        errors.value = response.response.data;
        isLoading.value = false;
    }

    function login(user) {
        delete axios.defaults.headers.common["Authorization"];
        isLoading.value = true;

        store.dispatch("login", user)
            .then(() => {
                store.dispatch("get_current_user").then((currentUserResponse) => {
                    router.push({ name: "dashboard" });
                }).catch((catchCurrentUserError) => {
                    errorAndLoader(catchCurrentUserError);
                });
                errors.value = null;
            })
            .catch((catchLoginError) => {
                errorAndLoader(catchLoginError);
            });
    }

    function logout() {
        store.dispatch("logout")
            .then((response) => {
                router.push({ name: "login" });
            })
            .catch((error) => {
                alert(error);
            });
    }

    return {
        login,
        isLoading,
        errors,
        username,
        logout
    }
};