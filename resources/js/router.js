import VueRouter from "vue-router"
import Home from "./components/Home"
import Add from "./components/Add"
import Edit from "./components/Edit"
const routes=[
    {path:'/',component:Home},
    {path:'/Add',component:Add},
    {path:'/Edit/:id',component:Edit},
]
const  router=new VueRouter({
    routes
})

export  default  router