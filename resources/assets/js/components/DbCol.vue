<template>
    <div class="col-md-12 mt-0 mb-2 p-2">

    </div>
</template>

<script>

    import DbRow from './DbRow.vue';
    import DbChart from './DbChart.vue';

    export default {
        name: "db-col",
        props: {
            element: {
                type: Object,
                required: true
            }
        },
        components:{
            'db-row': DbRow,
            'db-chart': DbChart
        }
    }
</script>

<style scoped>

</style>