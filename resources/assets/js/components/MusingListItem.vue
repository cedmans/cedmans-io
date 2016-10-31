<template>
    <div class="row columns">
        <h2>{{musing.title}}</h2>
        <em>{{musing.getDate()}}</em> <em v-if="musing.isUpdated()"><br/>(Updated {{musing.getUpdated()}})</em>
        <div>{{musing.content}}</div>
    </div>
</template>

<script>
    export default {
        props: ['musing']
    }
</script>
