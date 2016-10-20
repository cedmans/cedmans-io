<template>
    <section class="hero">
        <img src="/images/desk-hero-small.jpg" />
    </section>
</template>
<script>
    export default {}
</script>
<style lang="sass" rel="stylesheet/scss">
    .hero {
        overflow: hidden;
        height: 100vh;

        img {
            height: 100v;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
            margin: -5px -10px -10px -5px;
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        &:after {
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
