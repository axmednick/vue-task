import Vue from "vue"
import App from "./components/App";
import VueRouter from "vue-router"
import router from "./router"
import axios from "axios"
Vue.use(VueRouter)




new Vue({
    el: '#app',
    render: h => h(App),
    router
})