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

</style>
