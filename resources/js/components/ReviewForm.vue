<template>
  <form action="../api/review" method="POST" @submit="sendReview()">
    <input type="hidden" name="user_id" id="user_id" :value="doctorId" >

        <div>
            <label for="patient_name">Il tuo nome</label> <!-- qua il pz dovrebbe inserire il nome -->
            <input type="text" name="patient_name" id="patient_name">
        </div>
        <div>
            <label for="title">Titolo della recensione</label> <!-- qua il pz dovrebbe il titolo della recensione -->
            <input type="text" name="title" id="title">
        </div>

        <div class="form-group"> <!-- qua il pz dovrebbe inserire il testo della recensione -->
            <label for="text">Corpo della recensione</label>
            <textarea class="form-control" name="text" id="text" v-model="text" rows="5"></textarea>
        </div>

        <div>
            <label for="added_on">Inserisci la data</label>
            <input type="date" name="added_on" id="added_on"/>
        </div>
        <div class="form-group mt-2">
            <label for="rating">Voto</label>
            <select name="rating" id="rating" class="form-control-sm">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Send message</button>
    </form>
</template>

<script>
import axios from 'axios'
export default {
  name:'ReviewForm',
  data(){
      return{
          rating:'',
          patient_name:'',
          text:'',
          title: '',
          id: '',
          added_on: ''
      }
  },
  props:[
      'doctorId',
  ],
  mounted(){
      this.id=this.doctorId;
      console.log(this.doctorId);
      console.log('piango');
      console.log(this.id);
  },
  methods:{
      sendReview(){
          console.log(this.doctorId);
          console.log('send message');
          axios.post('../api/review',)
          .then(res => {
              console.log(res)
              console.log('mandato');
          })
          .catch(err => {
              console.error(err);
          })
      }
  }
}
</script>

<style>
</style>
