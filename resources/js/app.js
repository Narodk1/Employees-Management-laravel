require("./bootstrap");

window.Vue = require("vue").default;
import Vue from "vue";
import VueRouter from "vue-router";
import { routes } from "./routes";
import {roles }from "popper.js";
Vue.use(VueRouter);

Vue.component(
    "employees-index",
    require("./components/employees/Index.vue").default
);

const router = new VueRouter({
    mode: "history",
    routes: routes
});

const app = new Vue({
    el: "#app",
    router: router
});
const appdel=new Vue (
    {
        es:"#appdel",
        router :router,
        roles :asserts
    }
)
