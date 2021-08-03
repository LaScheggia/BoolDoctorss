<template>
  <main>
    <Header />
    <router-view></router-view>
    <Footer />

  </main>
</template>

<script>


import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

export default {
  name: 'App',
  components: {
    Header,
    Footer,


  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap');

html, body {
  font-family: 'Montserrat', sans-serif;
}

#app {
  font-family: 'Roboto', sans-serif;
}

body {
    background-color: #eee
}

</style>
