let {ScChart} = require('./scchart.js');

import Dashboard from './components/Dashboard.vue';
import { EventBus } from './event-bus.js';

class ScDashboard{

    constructor(){
        this.setDashboardDefinitions();
        this.eventBusListeners();
        this.loadVue();

        this.dbType = document.querySelector('#dashboard').getAttribute('data-dashboard');
        this.dbRangeElement = document.querySelector('#dashboardRange');
        this.rangeStart = this.dbRangeElement.getAttribute('data-range-start');
        this.rangeEnd  = this.dbRangeElement.getAttribute('data-range-end');

        this.scChart = new ScChart();


        this.getData();
    }

    eventBusListeners(){
        EventBus.$on('changeDashboard', listItem => {
            console.log(listItem);
        });
    }

    loadVue(){
        this.app = new Vue({
            el: '#vue-main',
            data: this.setDashboardDefinitions(),
            components: {
                'dashboard': Dashboard
            },
            methods: {
                logClick: function(){
                    console.log('hi');
                }
            }

        });
    }

    setDashboardDefinitions(definition = null){
        if(!definition) {
            this.definition =  {
                lists: [
                    {
                        id: 0,
                        name: 'analytics',
                        listitems: [
                            {
                                id: 0,
                                name: 'overview',
                                type: 'charts'
                            },
                            {
                                id: 1,
                                name: 'pageviews',
                                type: 'charts'
                            },
                            {
                                id: 2,
                                name: 'sessions',
                                type: 'charts'
                            },
                            {
                                id: 3,
                                name: 'conversions',
                                type: 'charts'
                            },
                            {
                                id: 4,
                                name: 'sales',
                                type: 'charts'
                            },
                        ]
                    },
                    {
                        id: 1,
                        name: 'lists',
                        listitems: [
                            {
                                id: 0,
                                name: 'sessions',
                                type: 'list'
                            },
                            {
                                id: 1,
                                name: 'conversions',
                                type: 'list'
                            },
                            {
                                id: 2,
                                name: 'users',
                                type: 'list'
                            },
                            {
                                id: 3,
                                name: 'sites',
                                type: 'list'
                            },
                        ]
                    }
                ],
                charts: []

            };
        }
        else{
            this.definition = definition;
        }

        return this.definition;

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