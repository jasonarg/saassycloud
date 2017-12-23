let {ScChart} = require('./scchart.js');

class ScDashboard{

    constructor(dbType, rangeStart, rangeEnd){
        this.dbType = dbType;
        this.rangeStart = rangeStart;
        this.rangeEnd = rangeEnd;
        this.scChart = new ScChart();

        this.getData();
    }

    getData(){
        axios.get(`/api/${this.dbType}/${this.rangeStart}/${this.rangeEnd}`)
            .then( (response) => {
                this.scChart.init(response.data);
            }).catch(function (error) {
            console.log(error);
        });
    }
}


window.onload = function() {
    Vue.component('dashboard', require('./components/Dashboard.vue'));
    Vue.component('sidebar-nav', require('./components/SidebarNav.vue'));
    Vue.component('main-pane', require('./components/MainPane.vue'));

    const app = new Vue({
        el: '#vue-main'
    });
    let dbType = document.querySelector('#dashboard').getAttribute('data-dashboard');
    let dbRangeElement = document.querySelector('#dashboardRange');
    let rangeStart = dbRangeElement.getAttribute('data-range-start');
    let rangeEnd = dbRangeElement.getAttribute('data-range-end');

    let scDb = new ScDashboard(dbType, rangeStart, rangeEnd);
};