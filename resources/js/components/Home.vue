<template>
    <div>
        <div class="row text-left mt-5">
            <div class="container">
                <div class="card">
                    <div class="card-title"><h1>Todo App</h1></div>
                    <router-link to="/add">
                        <button class="btn btn-info btn-lg">Add</button>
                    </router-link>
                    <br>
                    <br>
                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="li in list">
                            <th scope="row">{{li.id}}</th>
                            <td>{{li.title}}</td>
                            <td>
                                <button class="btn btn-danger" @click="sil(li.id)">Delete</button>
                                <router-link :to="{path:'/Edit/'+li.id,params:{id:li.id}}">
                                    <button class="btn btn-info">Edit</button>
                                </router-link>
                            </td>
                        </tr>

                        </tbody>
                    </table>


                    <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios"

    export default {
        name: "Home",
        data: function () {
            return {
                list: []
            }
        },
        created() {
            var bu = this;
            axios.get('/api/todo').then(function (cavab) {
                bu.list = cavab.data;

            })
        },
        methods:{
            sil(id){
                axios.delete('api/todo/'+id).then(function (cavab) {
                    if (cavab.status==200){
                        location.reload();
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>