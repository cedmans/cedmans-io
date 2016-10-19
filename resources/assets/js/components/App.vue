<template>
    <section class="hero">

    </section>
</template>
<script>
    export default {}
</script>
<style lang="sass" rel="stylesheet/scss">
    .hero {
        background: url('/images/desk-hero.jpg');
        background-size: cover;
        height: 100vh;
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        filter: blur(5px);

        &:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(to bottom right,#002f4b,#dc4225);
            opacity: .8;
        }
    }
</style>
