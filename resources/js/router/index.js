import { createRouter, createWebHistory } from "vue-router";

const Home = { template: '<div>Home</div>' }
const About = { template: '<div>About</div>' }

// 2. Define some routes
// Each route should map to a component.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: Home },
  { path: '/about', component: About },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

// guard
// router.beforeEach((to, from, next) => {
//     const USER = Store.getters.get_current_user;
//     const IS_LOGGED_IN = USER ? true : false;

//     if (to.meta.requiresAuth) {
//         if (IS_LOGGED_IN) next();
//         else next({ name: "login" });
//     } else {
//         if (IS_LOGGED_IN && to.name === "login") {
//             router.push({ name: "dashboard" });
//         } else next();
//     }
// });

export default router;