let {ScChart} = require('./scchart.js');

class ScDashboard{

    constructor(){
        this.setDashboardDefinitions();
        this.loadVue();

        this.dbType = document.querySelector('#dashboard').getAttribute('data-dashboard');
        this.dbRangeElement = document.querySelector('#dashboardRange');
        this.rangeStart = this.dbRangeElement.getAttribute('data-range-start');
        this.rangeEnd  = this.dbRangeElement.getAttribute('data-range-end');

        this.scChart = new ScChart();

        this.getData();
    }

    loadVue(){
        Vue.component('dashboard', require('./components/Dashboard.vue'));

        Vue.component('sidebar-nav', require('./components/SidebarNav.vue'));
        Vue.component('sb-nav-list', require('./components/SbNavList.vue'));
        Vue.component('sb-nav-list-item', require('./components/SbNavListItem.vue'));

        Vue.component('main-pane', require('./components/MainPane.vue'));
        Vue.component('db-range-totals-bar', require('./components/DbRangeTotalsBar.vue'));
        Vue.component('db-range-total-item', require('./components/DbRangeTotalItem.vue'));

        this.app = new Vue({
            el: '#vue-main',
            data: this.definition,

        });

        console.log(this.app.views);
    }

    setDashboardDefinitions(definition = null){
        if(!definition) {
            this.definition = {
                views: [
                    {
                        name: 'analytics',
                        children: [
                            {
                                name: 'overview'
                            },
                            {
                                name: 'page-views'
                            },
                            {
                                name: 'sessions'
                            },
                            {
                                name: 'conversions'
                            },
                            {
                                name: 'sales'
                            },
                            {
                                name: 'revenue'
                            },
                        ]
                    },
                    {
                        name: 'lists',
                        children: [
                            {
                                name: 'sessions'
                            },
                            {
                                name: 'users'
                            },
                            {
                                name: 'views'
                            }
                        ]
                    }
                ]
            };
        }
        else{
            this.definition = definition;
        }

    }

    getData(){
        axios.get(`/api/${this.dbType}/${this.rangeStart}/${this.rangeEnd}`)
            .then( (response) => {
                this.scChart.init(response.data);
            }).catch(function (error) {
            //console.log(error);
        });
    }
}


window.onload = function() {
    let scDb = new ScDashboard();

};