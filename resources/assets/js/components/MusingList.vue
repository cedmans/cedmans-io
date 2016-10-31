<template>
    <div>
        <div class="row columns" v-for="musing in musings">
            <em>{{musing.date}}</em>
            <h2>{{musing.title}}</h2>
            <div>{{musing.content}}</div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['musings']
    }
</script>
