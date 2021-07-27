<template>
    <div class="card flex-row mb-3 class container" >

        <div>

            <img :src="propic" :alt="name">

        </div>

        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">{{name}}</h5>
                <h5 class="card-title">{{surname}}</h5>
                <span class="badge badge-success custom-badge">ttert</span>
            </div>
            <i>{{bio}}</i>
            <p class="card-text">{{specialization}}</p>

            <!-- <router-link class="btn btn-primary">Vedi post</router-link> -->
        </div>

    </div>
</template>

<script>
export default {
    name: 'Card',
    props: ['name', 'surname', 'bio', 'specialization', 'propic']

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
