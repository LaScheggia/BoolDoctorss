<template>
    <div>
        <body>
        <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: rgb(224, 242, 241); margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
            <h1>Messaggio inviato con successo!</h1>
            <p>Lo specialista ha ricevuto il tuo messaggio,<br/> riceverai una risposta nel minor tempo possibile.</p>
            <p class="mb-3">Verrai ricontattato tramite il canale che hai scelto in fase di invio del messaggio.</p>

            <router-link :to="{name: 'home'}"> <!-- bottone che porta alla pagina coi doc -->
                <vs-button :color="colorx" :gradient-color-secondary="colorx2" type="gradient">
                    Torna alla Home
                </vs-button>
            </router-link>
        </div>
        </body>
    </div>

</template>

<script>
export default {
  name:'Confirmation2',
    data(){
    return {
      colorx:'#009688',
      colorx2:'#80CBC4'
    }
  },
}
</script>

<style lang='scss' scoped>
body {
    text-align: center;
    padding: 40px 0;
    background: rgb(224, 242, 241);
}
h1 {
    color: rgb(38, 166, 154);
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-weight: 900;
    font-size: 40px;
    margin-bottom: 10px;
}
p {
    color: rgb(33, 33, 33);
    font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
    font-size:20px;
    margin: 0;
}
i {
    color: rgb(38, 166, 154);
    font-size: 100px;
    line-height: 200px;
    margin-left:-15px;
}
.card {
    background: white;
    padding: 60px;
    border-radius: 4px;
    box-shadow: 0 2px 3px #C8D0D8;
    display: inline-block;
    margin: 0 auto;
}
</style>
