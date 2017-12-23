<template>
    <div id="dashboard" class="col-sm-9 ml-sm-auto col-md-10 py-5 my-3 bg-light" data-dashboard="overview">
        <db-range-totals-bar></db-range-totals-bar>
        <div class="row justify-content-center mb-0 pb-0">
            <div class="col-md-12 mt-2 mb-0 px-2 pb-0">
                <div class="m-0 px-2 py-2 bg-white border">
                    <h6 id="mainChartTitle" class="d-inline-block text-info my-1">SaaSsy Cloud Analytics: Overview</h6>
                    <input id="dashboardRange" type="text" class="form-input float-right pl-3 mb-1" style="width: 280px; font-size: .8rem;" placeholder="November 18, 2017 - December 18, 2017" data-range-start="2017-11-18" data-range-end="2017-12-18"/>
                </div>
            </div>
        </div>
        <div class="row justify-content-center my-0">
            <div class="col-md-12 mt-0 mb-2 p-2">
                <div id="" class="chartWrapper my-0 mx-0 p-3 bg-white border">
                    <canvas id="overviewCombined" class="scChart" style="height:400px;width: content-box;"></canvas>
                </div>
            </div>
        </div>

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

    export default {
        name: "main-pane",
        components:{
            'db-range-totals-bar': DbRangeTotalsBar
        }
    }
</script>

<style scoped>

</style>