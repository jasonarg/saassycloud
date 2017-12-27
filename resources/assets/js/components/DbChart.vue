<template>
    <div id="" class="chartWrapper my-0 mx-0 p-3 bg-white border">
        <canvas v-bind:id="chart.name" class="scChart" v-bind:style="styleString"></canvas>
    </div>
</template>

<script>
    export default {
        name: "db-chart",
        props: {
            chart: {
                type: Object,
                required: true
            },
            height: {
                type: String,
                required: true
            }
        },
        computed: {
            styleString: function(){
                return {
                    width: 'content-box',
                    height: `${this.height}px`
                };
            }
        }
    }
</script>

<style scoped>

</style>