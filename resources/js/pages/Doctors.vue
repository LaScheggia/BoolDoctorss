<template>

<div>
    <div class="custom-major">
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

    <!-- paginazione -->
    <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li
                :class="{'disabled': pagination.current === 1}"
                class="page-item">
                    <button
                    @click="getDocs(pagination.current - 1)"
                    class="page-link" >&laquo;</button>
                </li>

                <li
                v-for="i in pagination.last"
                :key="'i'+i"
                :class="{'active' : pagination.current === i}"
                class="page-item">
                    <button
                    @click="getDocs(i)"
                        class="page-link">{{ i }}</button></li>


                <li
                :class="{'disabled': pagination.current === pagination.last}"
                class="page-item">
                    <button
                    @click="getDocs(pagination.current + 1)"
                    class="page-link" >&raquo;</button>
                </li>
            </ul>
        </nav>
    </div>
    </div>
</div>


</template>


<script>
import Card from '../components/Card.vue';
import axios from 'axios';
  export default {
    name: 'Doctors',
    components:{
        Card,
    },
    data(){
        return{
            users: [],
            pagination: {},
        }
    },
    methods:{
        getDocs(page = 1){
            axios.get('http://127.0.0.1:8000/api/doctors',{
                params:{
                    page: page
                }
            })
            .then(res => {
                //console.log(res.data.data);
                this.users = res.data.data;
                this.pagination = {
                    current: res.data.current_page,
                    last: res.data.last_page
                }
/*                     if(this.users.propic.startsWith('uploads')){
                        this.users.propic = '../storage/'+this.users.propic;
                    } */
            })

            .catch(err => {
                console.log(err);
            })
        }

    },
    created(){
        this.getDocs();
    }

  }
</script>



<style lang="scss">
.custom-major{
    background-color: aquamarine;

}


</style>
