<template v-if="element.type === 'rows'">
    <div v-bind:class="classString">
        <db-row
            v-for="row in element.rows"
            :key="row.id"
            :row="row"
        />
    </div>
</template>
<template>
    <div v-bind:class="classString">
        <db-chart
            :chart="element"
        />
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
        data() {
            return {}
        },
        computed: {
          classString: function(){
            return `col-md-${this.element.cols} mt-0 mb-2 p-2`;
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