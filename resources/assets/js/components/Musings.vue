<template>
    <div>
        <div class="row columns">
            <h1>Musings</h1>
        </div>
        <musing-list :musings="musings"></musing-list>
    </div>
</template>

<script>
    import MusingList from '../components/MusingList.vue';
    import Musing from '../view-models/Musing';

    export default {
        data: () => {
            return {
                musings: []
            }
        },

        components: {
            MusingList
        },

        methods: {
            getMusings() {
                this.$http.get('/api/musings').then(
                    (data) => {
                        let musings = [];
                        let musingListData = data.body;
                        for (let i = 0; i < musingListData.length; i++) {
                            let musingData = musingListData[i];
                            let musing = new Musing(musingData.title, musingData.content);
                            musings.push(musing);
                        }

                        this.musings = musings;
                    }
                )
            }
        },

        created() {
            this.getMusings();
        }
    }
</script>
