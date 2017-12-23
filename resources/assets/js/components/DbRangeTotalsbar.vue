<template>
    <div class="row justify-content-between">
        <db-range-total-item></db-range-total-item>
        <div class="col-md-2 mt-3 overview-head-item">
            <span class="d-block text-muted">Sessions</span>
            <h4 class="">21,729</h4>
        </div>
        <div class="col-md-2 mt-3 overview-head-item">
            <span class="d-block text-muted">Converions</span>
            <h4 class="">3,729</h4>
        </div>
        <div class="col-md-2 mt-3 overview-head-item">
            <span class="d-block text-muted">Sales</span>
            <h4 class="">1,729</h4>
        </div>
        <div class="col-md-2 mt-3 overview-head-item">
            <span class="d-block text-muted">Revenue</span>
            <h4 class="">$421,729</h4>
        </div>
    </div>
</template>

<script>
    export default {
        name: "db-range-totalsbar"
    }
</script>

<style scoped>

</style>