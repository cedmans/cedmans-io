<template>
    <div>
        <div v-for="musing in musings">
            <musing-list-item :musing="musing"></musing-list-item>
        </div>
    </div>
</template>

<script>
    import MusingListItem from '../components/MusingListItem.vue';

    export default {
        props: ['musings'],

        components: {
            MusingListItem
        }
    }
</script>
