<template>
    <div id="dashboard" class="col-sm-9 ml-sm-auto col-md-10 py-5 my-3 bg-light" data-dashboard="overview">
        <db-range-totals-bar></db-range-totals-bar>
        <div class="row justify-content-center mb-0 pb-0">
            <div class="col-md-12 mt-2 mb-0 px-2 pb-0">
                <db-title
                    :dashboard="dashboard.title"
                />
            </div>
        </div>
        <db-row
        />

        <div class="row justify-content-around mt-0 mb-0">
            <div class="col-md-4 px-2">
                <div class="mx-0 px-0 bg-white border" style="height: 250px;">
                    <canvas id="overviewAbCompareTotal" class="scChart" style="height:200px;width: content-box;"></canvas>
                </div>
            </div>
            <div class="col-md-4 px-2">
                <div class="mx-0 px-0 bg-white border" style="height: 250px;">
                    <canvas id="overviewAbCompareReferral" class="scChart" style="height:200px;width: content-box;"></canvas>

                </div>
            </div>
            <div class="col-md-4 px-2">
                <div class="mx-0 px-0 bg-white border" style="height: 250px;">
                    <canvas id="overviewAbCompareMonthlyVsAnnual" class="scChart" style="height:200px;width: content-box;"></canvas>
                </div>
            </div>
        </div>
        <div class="row justify-content-around mt-3">
            <div class="col-md-4 px-2">
                <div class="mx-0 px-0 bg-white border" style="height: 515px;"></div>
            </div>
            <div class="col-md-8 px-3">
                <div class="row">
                    <div class="col-md-12 px-2">
                        <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 px-2">
                        <div class="mx-0 px-0 bg-white border" style="height: 250px;"></div>
                    </div>
                </div>
            </div>
        </div>
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