<template>
    <div>
        <section class="hero">
            <div class="content">
                <h2>Hero Header</h2>
                <p>Aliquam erat ac ipsum. Integer aliquam purus. Quisque lorem tortor fringilla sed, vestibulum id, eleifend justo vel bibendum sapien massa ac turpis faucibus orci luctus non</p>
                </div>
            <div class="waves"></div>
        </section>
    </div>
</template>

<script>
export default {
    name: 'Heroheader'

}
</script>

<style lang="scss">
:root {
  --color: rgb(77, 182, 172);
}

body {
  margin: 0;
  padding: 0;
}

.content {
  max-width: 600px;
  margin: 0 auto;
  padding: 0 20px;
}

.hero {
  position: relative;
  background: rgb(0, 105, 92);
  color: white;
  height: 50vh;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.hero h2 {
  position: relative;
  z-index: 1;
  font-size: 4.5rem;
  margin: 0 0 10px;
  line-height: 1;
  color: rgba(255, 255, 255, 0.9);
}

.hero p {
  position: relative;
  z-index: 1;
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.5);
  line-height: 1.4;
}

/* ========================= */

.waves {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 200px;
  background-color: var(--color);
  box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
  transition: 500ms;
}

.waves::before,
.waves::after {
  content: '';
  position: absolute;
  width: 300vw;
  height: 300vw;
  top: -65vw;
  left: 50%;
  transform: translate(-50%, -75%);
}

.waves::before {
  border-radius: 44%;
background: -webkit-linear-gradient(to right, #009688, #B2DFDB);
  background: linear-gradient(to right, #009688, #B2DFDB);
  animation: waves 8s linear infinite;
}

.waves::after {
  border-radius: 44%;
  background: -webkit-linear-gradient(to right, #009688, #B2DFDB);
  background: linear-gradient(to right, #009688, #B2DFDB);
  animation: waves 15s linear infinite;
}

@keyframes waves {
  0% {
    transform: translate(-50%, -75%) rotate(0deg);
  }

  100% {
    transform: translate(-50%, -75%) rotate(360deg);
  }
}


</style>
