<template>
    <div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-custom">
            <div class="container">
                <router-link class="navbar-brand" :to="{name: 'home'}">BoolDoctors</router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link navbar-text" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <router-link class="nav-link navbar-text" :to="{name: 'doctors'}">I nostri dottori</router-link>
                    </li>
                    <li class="nav-item">
                    <router-link class="nav-link navbar-text" :to="{name: 'contacts'}">Contattaci</router-link>
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
.navbar-custom {
    background-color: #E0F2F1;
}

.navbar-custom .navbar-brand,
.navbar-custom .navbar-text {
    color: #00695C;
}



</style>






