<template>
    <h6 id="mainChartTitle" class="d-inline-block text-info my-1">SaaSsy Cloud Analytics: {{ listItem.name }}</h6>
    <input id="dashboardRange" type="text" class="form-input float-right pl-3 mb-1" style="width: 280px; font-size: .8rem;" placeholder="November 18, 2017 - December 18, 2017" data-range-start="2017-11-18" data-range-end="2017-12-18"/>
</template>

<script>
    export default {
        name: "db-title",
        props: {
            listItem: {
                type: Object,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>