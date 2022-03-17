import axios from "axios";
import env from "../../config/env.js";

export const auth = {
    state: {
        tokenResponse: {},
        currentUser: null,
    },
    actions: {
        login(context, user) {
            return new Promise((resolve, reject) => {
                let data = {
                    client_id: env.CLIENT_ID,
                    grant_type: env.GRANT_TYPE,
                    client_secret: env.CLIENT_SECRET,
                    username: user.email,
                    password: user.password,
                };

                axios.post('/oauth/token', data)
                .then((response) => {
                    context.commit("update_token_response", response.data);
                    axios.defaults.headers.common["Authorization"] = `Bearer ${response.data.access_token}`;
                    resolve(response);
                })
                .catch((catchLoginError) => {
                    reject(catchLoginError);
                });
            });
        },

        get_current_user(context) {
            return new Promise((resolve, reject) => {
                axios.get('api/v1/user')
                .then((response) => {
                    context.commit("update_current_user", response.data);
                    resolve(response);
                })
                .catch((catchUserError) => {
                    reject(catchUserError);
                });
            });
        },

        logout(context) {
            return new Promise((resolve, reject) => {
                context.commit("logout");
                delete axios.defaults.headers.common["Authorization"];
                resolve();
            }).catch((catchLoginError) => {
                reject(catchLoginError);
            });
        },

    },

    mutations: {
        update_token_response(state, tokenResponse) {
            state.tokenResponse = tokenResponse;
        },

        update_current_user(state, currentUser) {
            state.currentUser = currentUser;
        },

        logout(state) {
            state.currentUser = null;
            state.tokenResponse = {};
        },
    },

    getters: {
        get_access_token(state) {
            return state.tokenResponse.access_token;
        },
        get_current_user(state) {
            return state.currentUser;
        }
    }
};