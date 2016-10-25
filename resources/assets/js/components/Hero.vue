<template>
    <section class="hero">
        <div class="hero-image"></div>
        <div class="row">
            <div class="columns landscape medium-5">
                <div class="row table-centered">
                    <div class="intro columns small-centered user-image"></div>
                    <div class="motto columns small-centered">
                        <h1>{{ user.name }}</h1>
                        <p>{{ user.motto }}</p>
                    </div>
                </div>
            </div>
            <div class="hero-buttons columns medium-7">
                <div class="button-group table-centered large stacked">
                    <a href="/mission" class="button hollow white round">My Mission</a>
                    <a href="#" class="button hollow white round">Musings</a>
                    <a href="#" class="button hollow white round">Contact</a>
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
