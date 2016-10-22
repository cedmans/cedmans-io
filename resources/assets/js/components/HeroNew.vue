<template>
    <section class="hero">
        <div class="hero-image"></div>
        <div class="row intro">
            <div class="columns small-centered user-image"></div>
        </div>
        <div class="row motto">
            <div class="columns small-centered">
                <h1>{{ user.name }}</h1>
                <p>Engineering, Architecture, and Artistry in Software</p>
            </div>
        </div>
        <div class="row hero-buttons">
            <div class="columns">
                <div class="button-group large stacked">
                    <a href="#" class="button hollow white round">My Mission</a>
                    <a href="#" class="button hollow white round">Musings</a>
                    <a href="#" class="button hollow white round">LinkedIn</a>
                    <a href="#" class="button hollow white round">Github</a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['user']
    }
</script>
