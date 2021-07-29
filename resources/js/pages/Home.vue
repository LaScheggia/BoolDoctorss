<template>

        <div>
            <Banner  />

            <div class="form-group search container mb-5" v-if="specs.length > 0">
                <select
                    class="form-control"
                    name="specializations"
                    placeholder="Scegli il tipo di specializzazione"
                    v-model="filterdoctor"
                    autocomplete="on"

                >
                    <option value="0" disabled>scegli una specializzazione</option>
                    <option
                    v-for="specialization in specs"
                    :key="specialization.id"
                    :value="specialization.id"
                    @click="searchdoctor()"
                    >
                        <router-link :to="{name: 'specializations', params:{'spec': specialization.name}}">
                            {{ specialization.name}}
                        </router-link>


                    </option>
                </select>
            </div>

        </div>

</template>


<script>


import axios from 'axios';
import Banner from '../components/Banner.vue';
//import Profile from '../components/Profile.vue';

  export default {
    name: 'Home',
    components:{
        Banner,
        //Profile,

    },
    props: {
        specializations: [],
    },
    mounted(){
        this.getSpecs();
    },
    data(){
        return{
            specId: this.selected,
            users: [],
            results: true,
            filterdoctor: [],
            specs: [],
            doctors: []
        }
    },
    methods:{
        getSpecs(){
            axios.get('http://127.0.0.1:8000/api/doctors/specs')
            .then(res => {
                this.specs=res.data;
                console.log(this.specs)
            })
            .catch(err => {
                console.error(err);
            })
        },
        searchdoctor(){
            //qua dovrebbe cercare i dottori(?)
        },
    },


  }
</script>



<style lang="scss" scoped>
.form-control:focus {
  box-shadow: none;
}


.form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}


</style>
