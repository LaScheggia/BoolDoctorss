<template>

        <div>
            <Banner  /> <!-- banner con slider -->


            <div class="input-group search container mb-5" v-if="specs.length > 0"> <!-- campo di select -->
                <select
                    class="form-control"
                    name="specializations"
                    placeholder="Scegli il tipo di specializzazione"
                    v-model="filterdoctor"
                    autocomplete="on"

                >
                    <option value="0" disabled>Scegli una specializzazione</option>
                    <option
                    v-for="specialization in specs"
                    :key="specialization.id"
                    :value="specialization.id"
                    >
                    {{ specialization.name}}
                    </option>
                </select>

                    <router-link :to="{name: 'specializations', params:{'toSearch': filterdoctor}}"> <!-- bottone che porta alla pagina coi doc -->
                        <vs-button :color="colorx" :gradient-color-secondary="colorx2" type="gradient">
                            Cerca il tuo nuovo dottore
                        </vs-button>
                    </router-link>
            </div>

            <Heroheader/>



        </div>

</template>


<script>


import axios from 'axios';
import Banner from '../components/Banner.vue';
import Heroheader from '../components/Heroheader.vue'
//import Profile from '../components/Profile.vue';

  export default {
    name: 'Home',
    components:{
        Banner,
        //Profile,
        Heroheader,

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
            doctors: [],
            colorx:'#009688',
            colorx2:'#80CBC4'

        }
    },
    methods:{
        getSpecs(){
            axios.get('http://127.0.0.1:8000/api/doctors/specs')
            .then(res => {
                this.specs=res.data;
                //console.log(this.specs)
            })
            .catch(err => {
                console.error(err);
            })
        },
    },


  }
</script>



<style lang="scss" scoped>
.form-control:focus {
  box-shadow: none;
}


.form-control::placeholder {
  font-size: 1rem;
  color: #212121;
  font-style: italic;
}


</style>
