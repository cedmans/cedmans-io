<template>
    <section class="hero">
        <div class="hero-image"></div>
        <div class="row">
            <div class="intro columns small-centered user-image"></div>
            <div class="motto columns small-centered">
                <h1>{{ user.name }}</h1>
                <p>{{ user.motto }}</p>
            </div>
            <div class="hero-buttons columns small-centered">
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
