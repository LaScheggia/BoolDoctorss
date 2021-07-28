<template>
    <div>
        <div class="container">
        <div>
            <img :src="user.propic" :alt="user.name">
        </div>

        <h1>{{user.name}}</h1>
        <p>{{user.bio}}</p>
        <p>{{user.email}}</p>
        </div>


        <div class="container">
            <div v-for="review in user.reviews"
            :key="review.id"
            class="mb-3">
                <h5>{{ review.title }}</h5>
                <p>{{ review.text }}</p>
                <p>{{ review.rating }}/5</p>
                <hr>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'Profile',
    data(){
        return{
            user: {}
        }
    },
    mounted(){
        axios.get('http://127.0.0.1:8000/api/doctors/'+this.$route.params.id)
        .then(res =>{
            if(res.data.success){
                this.user = res.data.result;
                console.log(res.data.result)
            } else {
                /* this.$router.push({ name: 'error404' }) */
                console.log('non ci sta nessun dottore qua')
            }
        })
        .catch(err => {
            console.log(err);
        })
    }

}

</script>

<style>

</style>
