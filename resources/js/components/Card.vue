<template>
    <div class="card flex-row mb-3 class container" >

        <div>
            <!-- <img :src="propic" :alt="name"> -->
        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">Nome: {{name}}</h5>
                <h5 class="card-title">Cognome: {{surname}}</h5>
                <span class="badge badge-success custom-badge">ttert</span>
            </div>
            <p class="card-text">{{bio}}</p>
            <p class="card-text">Indirizzo: {{address}}</p>
            <p v-for="spec in specializations"
            :key="spec.id"
            >
                {{spec.name}}
            </p>

            <router-link class="nav-link" :to="{name: 'profile', params:{ id }}">I nostri dottori</router-link>
        </div>

    </div>
</template>

<script>
export default {
    name: 'Card',
    props: ['name', 'surname', 'bio', 'specializations', 'propic', 'address', 'id'],
    mounted(){
        //console.log('ciao', this.specializations);
    }

}
</script>

<style lang="scss">
    .custom-badge{
        display: inline-block;
        height: 2rem;
        line-height: 2rem;
    }
    .post-cover{
        width: 300px;
        img{
            width: 100%;
        }
    }

</style>
