let {ScChart} = require('./scchart.js');

import Dashboard from './components/Dashboard.vue';
import { EventBus } from './event-bus.js';

const jd = require('./config/dashboards/overview/layout.json');

class ScDashboard{

    constructor(){
        this.setDashboardDefinitions();
        this.eventBusListeners();
        this.loadVue();

        this.dbType = this.app.lists[this.app.current.list].listItems[this.app.current.listItem].name;
        this.rangeStart = this.app.range.start;
        this.rangeEnd  = this.app.range.end;

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
            },
            computed: {
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
                        listItems: [
                            {
                                id: 0,
                                name: 'overview',
                                type: 'charts',
                                active: true
                            },
                            {
                                id: 1,
                                name: 'pageviews',
                                type: 'charts',
                                active: false
                            },
                            {
                                id: 2,
                                name: 'sessions',
                                type: 'charts',
                                active: false
                            }
                        ]
                    },
                    {
                        id: 1,
                        name: 'lists',
                        listItems: [
                            {
                                id: 0,
                                name: 'sessions',
                                type: 'list',
                                active: false
                            },
                            {
                                id: 1,
                                name: 'conversions',
                                type: 'list',
                                active: false
                            },
                            {
                                id: 2,
                                name: 'users',
                                type: 'list',
                                active: false
                            },
                            {
                                id: 3,
                                name: 'sites',
                                type: 'list',
                                active: false
                            },
                        ]
                    }
                ],
                charts: [],
                dashboard: jd,
                current: {
                    list: 0,
                    listItem: 0

                },
                range: {
                    start: '2017-11-18',
                    end: '2017-12-18'
                }

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
                console.log(response.data);
            }).catch(function (error) {
            //console.log(error);
        });
    }
}


window.onload = function() {
    let scDb = new ScDashboard();
};