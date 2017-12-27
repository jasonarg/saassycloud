<template>
    <div v-bind:class="classString">
        <template v-if="childIsRow">
            <db-sub-row
                    v-for="row in element.rows"
                    :key="row.id"
                    :row="row"
            />
        </template>
        <template v-else>
                <db-chart
                        :chart="element"
                        :height="height"
                />

        </template>
    </div>
</template>
<script>

    import DbSubRow from './DbSubRow.vue';
    import DbChart from './DbChart.vue';

    export default {
        name: "db-col",
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
                return `col-md-${this.element.cols} mt-0 mb-2 ${this.childIsRow ? 'py-0 px-2' : 'p-2'}`;
            },
            childIsRow: function(){
                return this.element.elType === 'rows' ? true : false;
            }
        },
        data() {
            return {

            }
        },
        components:{
            'db-sub-row': DbSubRow,
            'db-chart': DbChart
        },
        mounted(){
          //  console.log(this.element.type === 'rows')
        }
    }
</script>

<style scoped>

</style>