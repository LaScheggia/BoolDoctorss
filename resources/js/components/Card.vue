<template>
    <div class="card-flex-row">
            <!-- <router-link class="nav-link" :to="{name: 'profile', params:{ id }}">I nostri dottori</router-link> -->
        <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <vs-card>
                <div slot="header">
                    <h3 color="primary">
                        <vs-button disabled type="border">{{name}} {{surname}}</vs-button>
                    </h3>
                    <vs-chip color="primary" type="gradient" v-for="spec in specializations" :key="spec.id">
                        {{spec.name}}
                    </vs-chip>
                </div>
                <hr>
                <div>
                    <span>{{bio}}</span>
                </div>
                <div slot="footer">


                    <vs-row vs-justify="flex-end">
                        <!-- <vs-button type="gradient" color="danger" icon="favorite"></vs-button> -->
                        <!-- <vs-button color="primary" icon="turned_in_not"></vs-button> -->
                        <!-- <vs-button color="rgb(230,230,230)" color-text="rgb(50,50,50)" icon="settings" ></vs-button> -->
                        <vs-button color="success" type="gradient" :to="{ name: 'profile', params: { id } }">Deattagli</vs-button>
                    </vs-row>
                </div>
                </vs-card>
            </vs-col>
        </vs-row>
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

<style lang="scss" scoped>


</style>
