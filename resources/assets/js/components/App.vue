<template>
    <hero-section></hero-section>
</template>

<script>
    export default {
        components: {
            'hero-section': require('./Hero.vue')
        },
        data() {
            return {
                user: null
            }
        },
        methods: {
            getUser() {
                this.$http.get('/api/users/1').then(
                    (data) => { this.user = data.body; },
                    (error) => { console.error(error) }
                )
            }
        },

        created() {
            this.getUser();
        }
    }
</script>
