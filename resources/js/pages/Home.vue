<template>
          <div>
<!--             <div class="nav-item">
                <a class="btn btn-primary btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
            </div>
            <div class="nav-item">
                <a class="btn btn-outline-success btn-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div> -->
            <h1>vediamo se funziona</h1>

            <vs-button color="primary" type="filled">Primary</vs-button>
            <vs-button color="success" type="filled">Success</vs-button>
            <vs-button color="danger" type="filled">Danger</vs-button>
            <vs-button color="warning" type="filled">Warning</vs-button>
            <vs-button color="dark" type="filled">Dark</vs-button>
            <vs-button color="rgb(134, 4, 98)" type="filled">RGB</vs-button>
            <vs-button disabled type="filled">Disabled</vs-button>
            <vs-button color="primary" type="filled" to="/components/list.html">Router</vs-button>


            <vs-row vs-justify="center">
            <vs-col type="flex" vs-justify="center" vs-align="center" vs-w="6">
                <vs-card>
                <div slot="header">
                    <h3>
                    Hello world !
                    </h3>
                </div>
                <div>
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
                </div>
                <div slot="footer">
                    <vs-row vs-justify="flex-end">
                    <vs-button type="gradient" color="danger" icon="favorite"></vs-button>
                    <vs-button color="primary" icon="turned_in_not"></vs-button>
                    <vs-button color="rgb(230,230,230)" color-text="rgb(50,50,50)" icon="settings"></vs-button>
                    </vs-row>
                </div>
                </vs-card>
            </vs-col>
            </vs-row>




        </div>

</template>


<script>
export default {
    name: 'Home'
}
</script>

<style>

</style>
