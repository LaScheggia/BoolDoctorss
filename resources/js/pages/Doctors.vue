<template>

<div class="custom-bg">

    <div class="custom-major" v-if="!loading">

        <form class="form-row container">

            <div class="d-flex justify-content-lg-around">

                <select class="mb-1 col-3 col-xs-12" name="" id=""
                    v-model="filters['spec']"
                >
                    <option value="" selected>Seleziona tutti i dottori</option>
                    <option
                    :value="specialization.id"
                    v-for="specialization in specializations"
                    :key="'specialization' + specialization.id">{{specialization.name}}</option>
                </select>


                <select class="mb-1 col-3 col-xs-12"  name="" id=""
                    v-model="filters['avgRating']"
                >
                    <option value="0">Seleziona un numero</option>
                    <option value="">Nessun filtro selezionato</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>


                <select class="mb-1 col-3 col-xs-12" name="" id=""
                    v-model="filters['sortRevCount']"
                >
                    <option value="">Nessun filtro selezionato</option>
                    <option value="desc">desc</option>
                    <option value="asc">asc</option>
                </select>

                <vs-button class="col" :color="colorx" :gradient-color-secondary="colorx2" type="gradient" @click="getDocs2()"> <!-- bottone x la searc -->
                    Cerca il dottore
                </vs-button>
            </div>

        </form>


        <div v-if="users.lenght">

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
                :ratingAvg="user.rating_avg"
                :countRev="user.reviews_count"
            />
        </div>

        <div v-else class="container d-flex align-items-center">
            <h1>Nessun dottore con i parametri da te scelti.</h1>
        </div>

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
    <Loader v-else />


</div>


</template>


<script>
import Card from '../components/Card.vue';
import Loader from '../components/Loader.vue';
import axios from 'axios';


  export default {
  name: "Doctors",
  components: {
    Card,
    Loader,
  },
  data() {
    return {
      filters: {},
      users: [],
      pagination: {},
      specializations: '',
      specs:[],
      avgRat: '',
      revCount: '',
      loading:true,
      colorx:'#009688',
      colorx2:'#80CBC4'
    };
  },
  methods: {
    createParams1(page) {
      const reqParams = {
        page: page,
      };

      if (this.$route.params.spec) {
        this.filters["spec"] = this.$route.params.spec;
      }
      if (this.$route.params.avgRating) {
        this.filters["avgRating"] = this.$route.params.avgRating;
      }
      if (this.$route.params.sortRevCount) {
        this.filters["sortRevCount"] = this.$route.params.sortRevCount;
      }
        console.log(this.filters["spec"]);
      return { ...reqParams, ...this.filters };
    },
    createParams2(page) {
      const reqParams = {
        page: page,
      };

      if (this.$route.params.spec) {
        this.$route.params.spec = this.filters["spec"];
      }
      if (this.$route.params.avgRating) {
        this.filters["avgRating"] = this.$route.params.avgRating;
      }
      if (this.$route.params.sortRevCount) {
        this.filters["sortRevCount"] = this.$route.params.sortRevCount;
      }
        console.log(this.filters["spec"]);
      return { ...reqParams, ...this.filters };
    },

    // Estendere questa funzione per prendere altri 2 parametri (ricerca per num di reviews e per stelle).
    // Questi 2 parametri verranno passati a createParams per creare la richiesta verso il backend.
    // Nome parametri: avgRating (valori:  1-5), sortRevCount (valori: asc/desc)


    getDocs1(page = 1) {
        // this.filters['spec']= '',
        axios
        .get("http://127.0.0.1:8000/api/doctors", {
            params: this.createParams1(page)
        }
        )
        .then((res) => {
          //console.log(res.data.data);
          this.users = res.data.data;
          this.loading = false
          this.pagination = {
              current: res.data.current_page,
            last: res.data.last_page,
          };
        //   console.log(this.users);
        })
        .catch((err) => {
            console.log(err);
        });
    },
    getDocs2(page = 1) {
        this.loading = true
        axios
        .get("http://127.0.0.1:8000/api/doctors", {
            params: this.createParams2(page)
        }

        )
        .then((res) => {
          //console.log(res.data.data);
          this.users = res.data.data;
          this.loading = false
          this.pagination = {
              current: res.data.current_page,
            last: res.data.last_page,
          };
        //   console.log(this.users);
        })
        .catch((err) => {
            console.log(err);
        });
    },
    getSpecs(){
            axios.get('http://127.0.0.1:8000/api/doctors/specs')
            .then(res => {
                this.specializations=res.data;
                console.log(this.specializations);
            })
            .catch(err => {
                console.error(err);
            })
        },
  },
  created() {
    this.getDocs1();
    this.getSpecs();
  },
};
</script>



<style lang="scss" scoped>

.form-row{
    padding: 15px;
}

.inline-search{
    padding: 15px;
}


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
