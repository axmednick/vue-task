<template>
    <div>
        <div class="row text-left mt-5">
            <div class="container">
                <div class="card">

                    <div class="col-md-6">
                        <br>
                        <div class="card-title">Add to do</div>
                        <input type="text" class="form-control" placeholder="Title" v-model="title"><br>
                        <input type="text" class="form-control" placeholder="Description" v-model="description"><br>
                        <button class="btn btn-info" @click="save()">Save</button>
                        <router-link to="/">
                            <button class="btn btn-danger">Back</button>
                        </router-link>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import  axios from "axios"
    export default {
        name: "Edit",
        data:function () {
            return {
                id:this.$route.params.id,
                title:'',
                description:''
            }
        },
        created() {
            var bu=this
            axios.get('api/todo/'+this.id).then(function (cavab) {

                bu.title=cavab.data.title
                bu.description=cavab.data.description
            })
        },
        methods:{
            save(){
                axios.put('api/todo/'+this.id,{title:this.title,description:this.description}).then(function (cavab) {

                })
            }
        }
    }
</script>

<style scoped>

</style>