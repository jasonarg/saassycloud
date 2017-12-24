<template>
    <div id="" class="chartWrapper my-0 mx-0 p-3 bg-white border">
        <canvas id="overviewCombined" class="scChart" style="height:400px; width: content-box;"></canvas>
    </div>
</template>

<script>
    export default {
        name: "db-chart",
        props: {
            chart: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>