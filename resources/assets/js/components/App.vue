<template>
    <hero-section :user="user"></hero-section>
</template>

<script>
    import User from '../view-models/User';

    export default {
        components: {
            'hero-section': require('./Hero.vue')
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
                        this.user = new User(userData.name, userData.email);
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
