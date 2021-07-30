<template>
    <div>
        <div class="">
        <Card
        v-for="user in users"
        :key="user.id"
        :name="user.name"
        :surname="user.surname"
        :bio="user.bio"
        :specializations="user.specializations"
        :propic="user.propic"
        :address="user.address"
        :id="user.id"
        />

    </div>
</template>

<script>
import axios from 'axios';
import Card from '../components/Card.vue';

export default {
    name: 'Specializations',
    data(){
        return{
            doctors: [],
            filterdoctor: [],
        }
    },
    components:{
        Card,
    },
    mounted(){
        this.getDoctors();
    },
    methods:{
        getDoctors(){
            axios.get('http://127.0.0.1:8000/api/specializations/' + this.$route.params.toSearch, {params: })
            .then(res => {
                console.log(res.data)
                console.log('diocristo')
                //this.doctors = res.data.data
            })
            .catch(err => {
                console.error(err);
            })
        },
    },

}
</script>

<style>

</style>
