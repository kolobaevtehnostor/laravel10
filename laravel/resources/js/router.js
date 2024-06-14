import { createWebHistory, createRouter } from "vue-router";

import Home from "@/views/Home.vue";
import AbstractFactory from "@/views/AbstractFactory.vue";
import Bridge from "@/views/Bridge.vue";
import Error404 from "@/views/Error404.vue";

const routes = [
    {
        path: "/",
        name: "Home",
        component: Home,
    },
    {
        path: "/abstract-factory",
        name: "AbstractFactory",
        component: AbstractFactory,
    },
    {
        path: "/bridge",
        name: "Bridge",
        component: Bridge,
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'Error404',
        component: Error404,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
