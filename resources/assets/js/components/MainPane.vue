<template>
    <div id="dashboard" class="col-sm-9 ml-sm-auto col-md-10 py-5 my-3 bg-light" data-dashboard="overview">
        <db-range-totals-bar
            :items="dashboard.rangeTotals.items"
        />
        <div class="row justify-content-center mb-0 pb-0">
            <div class="col-md-12 mt-2 mb-0 px-2 pb-0">
                <db-title
                    :dashboard="dashboard"
                />
            </div>
        </div>
        <db-row
            v-for="row in dashboard.rows"
            :key="row.id"
            :row="row"
        />
    </div>
</template>

<script>
    import DbRangeTotalsBar from './DbRangeTotalsBar.vue';
    import DbTitle from './DbTitle.vue';
    import DbRow from './DbRow.vue';

    export default {
        name: "main-pane",
        props: {
            dashboard: {
                type: Object,
                required: true
            }
        },
        computed: {
        },
        components:{
            'db-range-totals-bar': DbRangeTotalsBar,
            'db-title': DbTitle,
            'db-row': DbRow
        },
        mounted() {
            console.log(this.dashboard);
        }

    }
</script>

<style scoped>

</style>