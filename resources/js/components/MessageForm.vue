<template>
  <form action="../api/message" method="POST" @submit="sendMessage()">

    <input type="hidden" name="user_id" id="user_id" :value="doctorId" >

        <div class="form-group">
            <label for="mail">Inserisci la tua email</label>
            <input type="email" class="form-control" v-model="patient_mail" placeholder="Inserisci qui la tua mail" name="patient_mail" id="patient_mail"/>
        </div>

        <div class="form-group">
            <label for="patient_name">Nome</label>
            <input type="text" class="form-control" name="patient_name" id="patient_name" v-model="patient_name" rows="5" placeholder="Inserisci qui il testo...">
        </div>
        <div class="form-group">
            <label for="text_message">Cognome</label>
            <input type="text" class="form-control" name="patient_surname" id="patient_surname" v-model="patient_surname" rows="5" placeholder="Inserisci qui il testo...">
        </div>
        <div class="form-group">
            <label for="text_message">Message</label>
            <textarea class="form-control" name="text_message" id="text_message" v-model="text_message" rows="5" placeholder="Inserisci qui il testo..."></textarea>
        </div>
        <div class="form-group">
            <label for="patient_phone">Phone</label>
            <input type="text" class="form-control" v-model="patient_phone" name="patient_phone" placeholder="Inserisci qui il tuo numero" id="patient_phone"/>
        </div>
        <div>
            <label for="added_on">Inserisci la data</label>
            <input type="date" name="added_on" id="added_on"/>
        </div>

        <button type="submit" class="btn btn-primary mt-3" >Invia Messaggio</button>
    </form>
</template>

<script>
import axios from 'axios'
export default {
  name:'ContactForm',
  data(){
      return{
          patient_name: '',
          patient_surname: '',
          patient_phone:'',
          patient_email:'',
          text_message:'',
          id:'',
      }
  },
  props:[
      'doctorId',
  ],
  mounted(){
      this.id=this.doctorId;
      console.log(this.id);
  },
  methods:{
      sendMessage(){
          console.log(this.doctorId);
          console.log('send message');
          axios.post('../api/message')
          .then(res => {
              console.log(res)
          })
          .catch(err => {
              console.log(err.response.data);
              'non mandato'
          })
          console.log('messagio inviato');
          /* this.$emit('confermaInviato',false); */
      }
  }
}
</script>

<style lang="scss" scoped>
      button{
/*       background-color: #3f7bbd; */
      background-image: linear-gradient( 135deg , #386db3 45%, #56a7da);
         &:hover{
           background: linear-gradient(135deg, #56a7da 45%, #386db3);
            transition: 0.2s;
            transform: scale(1 ,1.1);
            box-shadow: 3px 7px 5px #888888;
          }
  }
</style>
