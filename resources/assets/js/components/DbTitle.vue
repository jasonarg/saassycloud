<template>
    <div class="m-0 px-2 py-2 bg-white border">
        <h6 id="mainChartTitle" class="d-inline-block text-info my-1">SaaSsy Cloud Analytics: {{ title }}</h6>
        <input id="dashboardRange" type="text" class="form-input float-right pl-3 mb-1" style="width: 280px; font-size: .8rem;" v-bind:placeholder="placeHolder"/>
    </div>
</template>

<script>
    const d3 = require('d3');
    export default {
        name: "db-title",
        props: {
            dashboard: {
                type: Object,
                required: true
            }
        },
        computed: {
            title: function(){
                return _.startCase(this.dashboard.title);
            },
            placeHolder: function(){
                let formatTime = d3.timeFormat("%B %d, %Y");
                let parseTime = d3.timeParse("%Y-%m-%d");
                let rangeStartStrObj = parseTime(this.dashboard.range.start);
                let rangeEndStrObj = parseTime(this.dashboard.range.end);

                return `${formatTime(rangeStartStrObj)} - ${formatTime(rangeEndStrObj)}`;
            }

        }
    }
</script>

<style scoped>

</style>