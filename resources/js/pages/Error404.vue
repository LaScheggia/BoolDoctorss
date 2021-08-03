<template>
    <div class="body404">
        <div class="mainbox">
        <div class="err">4</div>
        <i class="far fa-question-circle fa-spin"></i>
        <div class="err2">4</div>
        <div class="msg">Forse la pagina è stata cancellata da developers poco attenti? Sarà stata messa in quarantena? Sarà frutto della tua immaginazione?<p>Torna alla <router-link  id="logo" class="router-link" :to="{ name: 'home' }">home</router-link> da qua.</p></div>
        </div>
    </div>


</template>

<script>
export default {
    name: 'Error404'
}
</script>

<style lang="scss" scoped>
.body404 {
  background-color: rgb(178, 223, 219);
  height: 100vh;
}

.mainbox {
  background-color: rgb(178, 223, 219);
  margin: auto;
  height: 600px;
  width: 600px;
  position: relative;
}

  .err {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 20%;
    top: 8%;
  }

.far {
  position: absolute;
  font-size: 8.5rem;
  left: 42%;
  top: 15%;
  color: #ffffff;
}

 .err2 {
    color: #ffffff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 11rem;
    position:absolute;
    left: 68%;
    top: 8%;
  }

.msg {
    text-align: center;
    font-family: 'Nunito Sans', sans-serif;
    font-size: 1.6rem;
    position:absolute;
    left: 16%;
    top: 45%;
    width: 75%;
  }

.router-link {
  text-decoration: none;
  color: white;
}

.router-link:hover {
  text-decoration: underline;
}
</style>
