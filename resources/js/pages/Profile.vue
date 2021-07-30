<template>
    <div>
        <div class="container">
        <div>
            <img :src="user.propic" :alt="user.name">
        </div>

        <h1>{{user.name}}</h1>
        <p>{{user.bio}}</p>
        <p>{{user.email}}</p>
        </div>



        <div class="form">
            <ReviewForm  :doctorId="user.id"/>
        </div>

        <div>
            <MessageForm :doctorId="user.id"/>
        </div>
        <div class="row d-flex justify-content-center mt-100 mb-100">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">Latest Reviews</h4>
                    </div>
                    <div class="comment-widgets"  v-for="review in user.reviews" :key="review.id">
                        <!-- Comment Row -->
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2"><img src="https://placekeanu.com/300/300/y" alt="user" width="50" class="rounded-circle"></div>
                            <div class="comment-text w-100">
                                <h4 class="font-medium">{{review.patient_name}}</h4>
                                <h5 class="m-b-10 d-block">{{review.title}}</h5>
                                <p>{{review.text}}</p>
                                <p>Voto: {{ review.rating }}/5</p>

                                <div
                                class="stars"
                                v-for="index in 5"
                                :key="index">
                                <i class="fas fa-star"
                                 v-if="index < Math.round(review.rating)"></i>
                                <i class="far fa-star" v-else></i>
                                </div>

                                <div class="comment-footer"> <span class="text-muted float-right">{{review.added_on}}</span> </div>
                                <hr>
                            </div>
                        </div> <!-- Comment Row -->
                    </div> <!-- Card -->
                </div>
            </div>
        </div>











    </div>
</template>

<script>
import axios from 'axios';
import ReviewForm from '../components/ReviewForm.vue';
import MessageForm from '../components/MessageForm.vue';


export default {
    name: 'Profile',
    components:{
        ReviewForm,
        MessageForm,

    },
    data(){
        return{
            user: {},

        }
    },
    mounted(){
        axios.get('http://127.0.0.1:8000/api/doctors/'+this.$route.params.id)
        .then(res =>{
            if(res.data.success){
                this.user = res.data.result;
                console.log(res.data.result)
            } else {
                /* this.$router.push({ name: 'error404' }) */
                console.log('non ci sta nessun dottore qua')
            }
        })
        .catch(err => {
            console.log(err);
        })
        console.log(this.user.id);
        console.log(this.user)

    }

}

</script>

<style lang="scss" scoped>
body {
    background-color: #D32F2F;
    font-family: 'Calibri', sans-serif !important
}

.mt-100 {
    margin-top: 100px
}

.mb-100 {
    margin-bottom: 100px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid transparent;
    border-radius: 0px
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px
}

.comment-widgets {
    position: relative;
    margin-bottom: 10px
}

.comment-widgets .comment-row {
    border-bottom: 1px solid transparent;
    padding: 14px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin: 10px 0
}

.p-2 {
    padding: 0.5rem !important
}

.comment-text {
    padding-left: 15px
}

.w-100 {
    width: 100% !important
}

.m-b-15 {
    margin-bottom: 15px
}

.btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: 0.76563rem;
    line-height: 1.5;
    border-radius: 1px
}

.btn-cyan {
    color: #fff;
    background-color: #27a9e3;
    border-color: #27a9e3
}

.btn-cyan:hover {
    color: #fff;
    background-color: #1a93ca;
    border-color: #198bbe
}

.comment-widgets .comment-row:hover {
    background: rgba(0, 0, 0, 0.05)
}
</style>
