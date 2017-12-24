<template>
    <div v-bind:class="classString">
        <db-chart
                :chart="element"
                :height="height"
        />
    </div>
</template>
<script>

    import DbSubRow from './DbSubRow.vue';
    import DbChart from './DbChart.vue';

    export default {
        name: "db-sub-col",
        props: {
            element: {
                type: Object,
                required: true
            },
            height: {
                type: String,
                required: true
            }
        },
        computed: {
            classString: function(){
                return `col-md-${this.element.cols} mt-0 mb-2 p-2`;
            }
        },
        data() {
            return {

            }
        },
        components:{
            'db-chart': DbChart
        },
        mounted(){
          //  console.log(this.element.type === 'rows')
        }
    }
</script>

<style scoped>

</style>