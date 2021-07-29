<template>
    <div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <router-link class="navbar-brand" :to="{name: 'home'}">BoolDoctors</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'doctors'}">I nostri dottori</router-link>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contattaci</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>

</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>



</style>






