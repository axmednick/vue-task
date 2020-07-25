<template>

    <transition name="fade" mode="out-in">
         <router-view></router-view>
    </transition>

</template>

<script>
import Home from "./Home"
import Add from "./Add"
    export default {
        name: "App",
   components:{
            Home,Add

   }
    }
</script>

<style scoped>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>