<template>

    <div>
        <Heroheader/>
        <div>
            <div class="home-bg"> <!-- background container -->
                <div class="container">
                    <div class="text-home"> <!-- div text -->
                        <h1>Cerca il tuo prossimo specialista ora</h1>
                        <h5>La nostra ricerca avanzata inoltre, ti permetterà di filtrare lo specialista in base al numero delle recensioni e in base ai suoi voti.</h5>
                    </div>
                    <div class="search-home"> <!-- div search -->
                        <div class="input-group search container mb-5 d-flex p-2 align-items-start" v-if="specs.length > 0"> <!-- campo di select -->
                            <select
                                class="form-control"
                                name="specializations"
                                placeholder="Scegli il tipo di specializzazione"
                                v-model="filterdoctor"
                                autocomplete="on"

                            >
                                <option value="0" disabled>Scegli una specializzazione</option> <!-- ciclo delle specializzazioni -->
                                <option
                                v-for="specialization in specs"
                                :key="specialization.id"
                                :value="specialization.id"
                                >
                                {{ specialization.name}}
                                </option>
                            </select>

                            <router-link :to="{name: 'doctors', params:{'spec': filterdoctor}}"> <!-- bottone che porta alla pagina coi doc -->
                                <vs-button :color="colorx" :gradient-color-secondary="colorx2" type="gradient">
                                    Cerca il tuo nuovo dottore
                                </vs-button>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <Banner  /> <!-- banner con slider -->
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
  align-content: initial;
}


.form-control::placeholder {
  font-size: 1rem;
  color: #212121;
  font-style: italic;
}


.home-bg{
    background-image: url('https://images.squarespace-cdn.com/content/v1/5608c2dae4b0ffbc0ff092a2/1462484735802-94M1A977HJJEL2THCD2Q/Medical-physician-doctor-hands.png?format=2500w.jpg');
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover;
}

.text-home{
    padding-top: 50px;
    width: 70%;
}

.search-home{
    padding-top: 50px;
}
</style>
