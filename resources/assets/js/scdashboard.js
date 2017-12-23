let {ScChart} = require('./scchart.js');

import Dashboard from './components/Dashboard.vue';

class ScDashboard{

    constructor(){
        //this.setDashboardDefinitions();
        this.loadVue();

        this.dbType = document.querySelector('#dashboard').getAttribute('data-dashboard');
        this.dbRangeElement = document.querySelector('#dashboardRange');
        this.rangeStart = this.dbRangeElement.getAttribute('data-range-start');
        this.rangeEnd  = this.dbRangeElement.getAttribute('data-range-end');

        this.scChart = new ScChart();

        this.getData();
    }

    loadVue(){
        this.app = new Vue({
            el: '#vue-main',
            data(){
              return {
                  lists: [
                      {
                          id: 0,
                          name: 'analytics',
                          listitems: [
                              {
                                  id: 0,
                                  name: 'overview'
                              },
                              {
                                  id: 1,
                                  name: 'pageviews'
                              },
                              {
                                  id: 2,
                                  name: 'sessions'
                              },
                              {
                                  id: 3,
                                  name: 'conversions'
                              },
                              {
                                  id: 4,
                                  name: 'sales'
                              },
                          ]
                      },
                      {
                          id: 1,
                          name: 'lists'
                      }
                    ],
                  charts: []
              };
            },
            components: {
                'dashboard': Dashboard
            }

        });
    }

    setDashboardDefinitions(definition = null){
        if(!definition) {
            this.definition =  {
                    data: [
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