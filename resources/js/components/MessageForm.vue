<template>
  <form action="../api/message" method="POST" @submit="sendMessage()" id="form" class="topBefore">

    <input type="hidden" name="user_id" id="user_id" :value="doctorId" >

        <div class="form-group">
            <label for="mail">Inserisci la tua email</label>
            <input type="email" class="form-control" v-model="patient_mail" placeholder="Inserisci qui la tua mail" name="patient_mail" id="patient_mail"/>
        </div>

        <div class="form-group">
            <label for="patient_name">Nome</label>
            <input type="text" class="form-control" name="patient_name" id="patient_name" v-model="patient_name" rows="5" placeholder="Il tuo nome">
        </div>
        <div class="form-group">
            <label for="text_message">Cognome</label>
            <input type="text" class="form-control" name="patient_surname" id="patient_surname" v-model="patient_surname" rows="5" placeholder="Il tuo cognome">
        </div>
        <div class="form-group">
            <label for="patient_phone">Phone</label>
            <input type="text" class="form-control" v-model="patient_phone" name="patient_phone" placeholder="Inserisci qui il tuo numero" id="patient_phone"/>
        </div>
        <div class="form-group">
            <label for="text_message">Message</label>
            <textarea class="form-control" name="text_message" id="text_message" v-model="text_message" rows="5" placeholder="Cosa vorresti dire al dottore? Spiega brevemente la tua richiesta"></textarea>
        </div>
        <div>
            <label for="added_on">Inserisci la data</label>
            <input type="date" name="added_on" id="added_on"/>
        </div>

        <!-- <vs-button type="submit" >invia il messaggio</vs-button> -->
        <button type="submit" class="btn btn-success mt-3" >Invia Messaggio</button>
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

/* form style */
@import url(https://fonts.googleapis.com/css?family=Lato:100,300,400);

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: rgb(0, 77, 64);
  font-size: 0.875em;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: rgb(0, 77, 64);
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: rgb(0, 77, 64);
  font-size: 0.875em;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: rgb(0, 77, 64);
}

input::placeholder, textarea::placeholder {
  color: rgb(0, 77, 64);
  font-size: 0.875em;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: rgb(0, 77, 64);
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: rgb(0, 77, 64);
  font-size: 0.875em;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: rgb(0, 77, 64);
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #cbc6c1;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}

body {
  font-family: 'Lato', sans-serif;
  background: #e2dedb;
  color: #b3aca7;
}

header {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
}

#form {
  position: relative;
  width: 500px;
  margin: 50px auto 100px auto;
}

input {
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  width: 470px;
  height: 50px;
  padding: 0px 15px 0px 15px;

  background: transparent;
  outline: none;
  color: rgb(0, 77, 64);

  border: solid 1px rgb(128, 203, 196);
  border-bottom: none;

  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background: rgb(224, 242, 241);
  color: rgb(0, 77, 64);
}

textarea {
  width: 470px;
  max-width: 470px;
  height: 110px;
  max-height: 110px;
  padding: 15px;

  background: transparent;
  outline: none;

  color: rgb(77, 182, 172);
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;

  border: solid 1px rgb(128, 203, 196);

  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: rgb(224, 242, 241);
  color: rgb(33, 33, 33);
}

#submit {
  width: 502px;

  padding: 0;
  margin: -5px 0px 0px 0px;

  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #b3aca7;

  outline:none;
  cursor: pointer;

  border: solid 1px #b3aca7;
  border-top: none;
}

#submit:hover {
  color: #e2dedb;
}
</style>
