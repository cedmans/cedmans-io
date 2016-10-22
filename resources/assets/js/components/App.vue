<template>
    <hero-component :user="user"></hero-component>
</template>

<script>
    import User from '../view-models/User';

    var HeroComponent = require('./Hero.vue');
    export default {
        components: {
            'hero-component': HeroComponent
        },
        data() {
            return {
                user: new User()
            }
        },
        methods: {
            getUser() {
                this.$http.get('/api/users/1').then(
                    (data) => {
                        let userData = data.body;
                        this.user = new User(userData.name, userData.email, userData.motto);
                    },
                    (error) => { console.error(error) }
                )
            }
        },

        created() {
            this.getUser();
        }
    }
</script>
