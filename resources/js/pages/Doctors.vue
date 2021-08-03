<template>

<div class="custom-bg">
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
    <div class="wrapper">
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
    components: {
        Card,
    },
    data() {
        return {
            filters: {},
            users: [],
            pagination: {},
        }
    },
    methods: {
        createParams(page) {
            const reqParams = {
                page: page
            }

            if (this.$route.params.spec) {
                this.filters["spec"] = this.$route.params.spec;
            }

            return {...reqParams, ...this.filters};
        },

        // Estendere questa funzione per prendere altri 2 parametri (ricerca per num di reviews e per stelle).
        // Questi 2 parametri verranno passati a createParams per creare la richiesta verso il backend.
        // Nome parametri: avgRating (valori:  1-5), sortRevCount (valori: asc/desc)
        getDocs(page = 1) {
            axios.get('http://127.0.0.1:8000/api/doctors', {
                params: this.createParams(page)
            })
            .then(res => {
                //console.log(res.data.data);
                this.users = res.data.data;
                this.pagination = {
                    current: res.data.current_page,
                    last: res.data.last_page
                }

            })
            .catch(err => {
                console.log(err);
            })
        }
    },
    created() {
        this.getDocs();
    }
  }
</script>



<style lang="scss" scoped>
.custom-bg{
    background: #44A08D;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #093637, #44A08D);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #093637, #44A08D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}

.wrapper {
    height: 150px;
    display: flex;
    justify-content: center;
    align-items: center
}

.page-link {
    position: relative;
    display: block;
    color: rgb(0, 77, 64) !important;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid rgb(128, 203, 196) !important
}

.page-link:hover {
    z-index: 2;
    color: #fff !important;
    background-color: rgb(128, 203, 196);
    border-color: rgb(178, 223, 219)
}

.page-link:focus {
    z-index: 3;
    outline: 0;
    box-shadow: none
}

.page-item.active .page-link{
    background-color: rgb(128, 203, 196);
}


</style>
