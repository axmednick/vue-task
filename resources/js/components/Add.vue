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
    import axios from "axios"
    export default {
        name: "Add",
        data:function () {
            return{
                title:'',
                description:''
            }
        },
        methods:{
            save(){
                var bu=this;
                console.log('ss')
                axios.post('/api/todo',{title:this.title,description: this.description}).then(function (cavab) {
                    if (cavab.status==200){
                        bu.title=''
                        bu.description=''
                    }
                })
            }
        }
    }
</script>

<style scoped>

</style>