<template>
    <div class="m-0 px-2 py-2 bg-white border">
        <h6 id="mainChartTitle" class="d-inline-block text-info my-1">SaaSsy Cloud Analytics: {{ title }}</h6>
        <range-picker
                :range="dashboard.range"
            />
    </div>
</template>

<script>
    import RangePicker from "./RangePicker";
    export default {
        name: "db-title",
        props: {
            dashboard: {
                type: Object,
                required: true
            }
        },
        methods: {
            parseTime: function(dateStr){
                let d3ParseTime = d3.timeParse("%Y-%m-%d");
                return d3ParseTime(dateStr);
            }
        },
        computed: {
            title: function(){
                return _.startCase(this.dashboard.title);
            }

        },

        components: {
            'range-picker': RangePicker
        }
    }
</script>

<style scoped>

</style>