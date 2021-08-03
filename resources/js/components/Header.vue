<template>
    <header class="navbar-custom">
        <nav id="nav" class="navbar navbar-expand-lg container">
            <router-link id="logo" class="navbar-brand" :to="{ name: 'home' }">iSpecialists</router-link>
            <button
                class="navbar-toggler navbar-text"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <!-- <span class="navbar-toggler-icon navbar-text"></span> -->
                <i class="navbar-toggler-icon navbar-text fas fa-stethoscope"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav pl-1 pr-1">
                    <li class="nav-item ">
                        <router-link class="nav-link navbar-text" :to="{ name: 'doctors' }"><i class="fas fa-briefcase-medical"></i> I nostri dottori</router-link>
                    </li>
                </ul>
                <ul class="navbar-nav pl-1 pr-1 d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link navbar-text" href="/register"><i class="fas fa-user-md"></i> Sei un dottore?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-text" href="/login"> <i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-text" href="/register"><i class="fas fa-user-circle"></i> Registrati</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: "Header"
};
</script>

<style lang="scss" scoped>

img {
    height: 50px;
}
.navbar-custom {
    background-color: #e0f2f1;
}

.navbar-custom .navbar-brand,
.navbar-custom .navbar-text {
    color: #00695c;
}
</style>
