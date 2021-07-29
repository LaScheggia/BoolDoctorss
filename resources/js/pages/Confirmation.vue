<template>
  <div class="text-center pt-3">
    <h2>L'OPERAZIONE E' ANDATA A BUON FINE</h2>
    <img src="https://www.displaysense.co.uk/images/social-distancing-glow-in-the-dark-green-tick-sticker-85mm-p3755-14416_image.jpg" alt=""> <br>
    <router-link :to="{name:'home'}">HOME</router-link>
  </div>
</template>

<script>
export default {
  name:'Confirmation'
}
</script>

<style lang='scss' scoped>
  img{
    height: 100px;
  }
</style>
