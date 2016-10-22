<template>
    <section class="hero">
        <div class="hero-image"></div>
        <div class="row intro">
            <div class="columns small-centered user-image"></div>
        </div>
        <div class="row motto">
            <h1>{{ user.name }}</h1>
            <p>Engineering, Architecture, and Artistry in Software</p>
        </div>
    </section>
</template>

<script>
    export default {
        props: ['user']
    }
</script>
