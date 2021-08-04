<template>
  <form action="../api/review" method="POST" @submit="sendReview()" id="form" class="topBefore">
    <input type="hidden" name="user_id" id="user_id" :value="doctorId" >

        <div>
            <label for="patient_name">Il tuo nome</label> <!-- qua il pz dovrebbe inserire il nome -->
            <input type="text" name="patient_name" id="patient_name" placeholder="Il tuo nome" required>
        </div>
        <div>
            <label for="title">Titolo della recensione</label> <!-- qua il pz dovrebbe il titolo della recensione -->
            <input type="text" name="title" id="title" placeholder="Dai un titolo alla tua recensione" required>
        </div>

        <div class="form-group"> <!-- qua il pz dovrebbe inserire il testo della recensione -->
            <label for="text">Corpo della recensione</label>
            <textarea class="form-control" name="text" id="text" v-model="text" rows="5" placeholder="Corpo della recensione" required></textarea>
        </div>

        <div class="form-group mt-2">
            <label for="rating">Voto</label>
            <select name="rating" id="rating" class="form-control-sm">
              <option value="1">★</option>
              <option value="2">★★</option>
              <option value="3">★★★</option>
              <option value="4">★★★★</option>
              <option value="5">★★★★★</option>
            </select>
        </div>

        <div class="form-group mt-2">
            <input
                type="hidden"
                name="added_on"
                id="added_on"
                v-model="added_on"
                required
            />
        </div>

        <button type="submit" class="btn btn-grad mt-3">{{ sending ? "Invio in corso..." : "Invia Recensione" }}</button>
    </form>
</template>

<script>
import axios from "axios";
export default {
  name: "ReviewForm",
  data() {
    return {
      id: null,
      patient_name: null,
      title: null,
      text: null,
      rating: null,
      added_on: new Date().toISOString().substr(0, 10), // 05/09/2019
      sending: false,
    };
  },
  props: ["doctorId"],
  mounted() {
    this.id = this.doctorId;
    console.log(this.doctorId);
    console.log("piango");
    console.log(this.id);
  },
  methods: {
    sendReview() {
      this.sending = true;
      axios
        .post("../api/review")
        .then((res) => {
          console.log(res);
          this.sending = false;
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
};
</script>

<style lang="scss" scoped>


.btn-grad {background-image: linear-gradient(to right, #00695C 0%, #80CBC4  51%, #00695C  100%)}
.btn-grad {
    margin: 10px;
    padding: 15px 45px;
    text-align: center;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;
    box-shadow: 0 0 20px #eee;
    border-radius: 10px;
    display: block;
}

.btn-grad:hover {
    background-position: right center; /* change the direction of the change here */
    color: #fff;
    text-decoration: none;
}


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

