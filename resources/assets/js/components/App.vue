<template>
    <section class="hero">
        <div class="hero-image">
        </div>
        <div class="row intro">
            <div class="small-centered medium-uncentered medium-6 large-7 columns">
                <h1>Yo Dawg</h1>
                <p>Here I am!</p>
            </div>
        </div>
    </section>
</template>

<script>
    export default {}
</script>

<style lang="sass" rel="stylesheet/scss">
    .hero {
        overflow: hidden;
        height: 100vh;

        .hero-image {
            background-image: url('/images/desk-hero-small.jpg');
            height: 100vh;
            width: 100%;
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

            position: absolute;
            z-index: -1;

            &:after {
                content: '';
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                background-image: linear-gradient(to bottom right, #004250, #04004d);
                opacity: .8;
            }
        }

        .intro {
            padding: 3rem;
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        h1 {
            color: #fff;
            font-size: 1.5rem;
            line-height: 1.5em;
            letter-spacing: -0.025em;
            font-weight: 300;
            text-align: center;
        }
        p {
            color: #fff;
            line-height: 1.75em;
            font-weight: 200;
            text-align: center;
            margin-bottom: 2rem;
        }
    }
</style>
