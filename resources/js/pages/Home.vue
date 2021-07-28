<template>
          <div>
<!--             <div class="nav-item">
                <a class="btn btn-primary btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            <div class="nav-item">
                <a class="btn btn-outline-success btn-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div> -->
            <h1>vediamo se funziona</h1>







         <div>
      <form class="d-flex mt-3 mb-3">
        <div>
          <!-- con v-model faccio il binding di textToSearch, ovvero del testo inserito nell'input -->
          <!-- con @keyup.enter faccio partire la funzione startSearch premendo invio -->
          <input type="text">
          <!-- <input
            v-model.trim="textToSearch"
            @keyup.enter="startSearch"
            class="form-control"
            type="text"
            placeholder="Find your movie/TV show"
          /> -->
        </div>
        <div class="ms-3">
          <!-- al click sul bottone faccio partire la funzione startSearch-->
            <!-- .prevent evita che si ricarichi la pagina ogni volta che clicco -->
             <vs-button color="success" type="filled">Search</vs-button>
          <!-- <button
            @click.prevent="startSearch"
            class="btn btn-primary mc_btn"
> -->


        </div>
      </form>
    </div>

        </div>



</template>


<script>

import axios from 'axios';
  export default {
    name: 'Home',
    components:{

    },
    mounted(){
        this.getSpecs();
    },
    data(){
        return{
            users: [],
            pagination: {},
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

    }

  }
</script>



<style lang="scss">


</style>
