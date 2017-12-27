/*
let {ScChart} = require('./scchart.js');
*/
import Dashboard from './components/Dashboard.vue';
import { EventBus } from './event-bus.js';




class ScDashboard{

    constructor(rangeStart, rangeEnd){
        this.scdbData.range.start = rangeStart;
        this.scdbData.range.end = rangeEnd;
        this.getRoute();
        this.loadConfig();
        this.loadData();
        this.loadView();
        this.loadEventListeners();
       /*
        this.groomData();*/
    }

    getRoute(){
        this.route = 'overview';
    }

    loadConfig(){
        this.configFiles = {};
        this.configFiles.navigation = require('./config/navigation.json');

        this.configFiles.dashboards = {};

        for(let dashboard in this.configFiles.navigation.lists[0].listItems){
            this.configFiles.dashboards[this.configFiles.navigation.lists[0].listItems[dashboard].name]
                = require(`./config/dashboards/${this.configFiles.navigation.lists[0].listItems[dashboard].name}/layout.json`);
        }
        this.scdbData.layout.navigation = this.configFiles.navigation.lists;
        this.scdbData.layout.dashboard = this.configFiles.dashboards[this.route];
        let chartList = this.extractCharts(this.scdbData.layout.dashboard.rows);
        for(let chart in chartList){
            console.log(chartList[chart]);
        }
    }

    extractCharts(rows){
        let rtnArray = [];
        for(let row in rows){
            for(let element in rows[row].elements){
                if(rows[row].elements[element].elType === "chart"){
                    rtnArray.push(rows[row].elements[element].name);
                }
                else{
                     rtnArray = rtnArray.concat(this.extractCharts(rows[row].elements[element].rows));
                }

            }
        }

        return rtnArray;
    }



    loadView(){

        this.app = new Vue({
            el: '#vue-main',
            data: this.scdbData.layout,
            components: {
                'dashboard': Dashboard
            },
            mounted(){
                console.log(this.data);
            }

        });
    }

    loadData(){
         axios.get(`/api/${this.route}/${this.scdbData.range.start}/${this.scdbData.range.end}`)
            .then( (response) => {
                this.scdbData.viewData.rough = response.data;
                this.polishDataAndLoadIntoDashboard();


            }).catch(function (error) {
                console.log(error);
        });
    }

    polishDataAndLoadIntoDashboard(){
        this.polishData();
        this.loadDataIntoDashboard();
    }

    polishData(){
        //for each chart in the current dashboard call it's polish function and
        //store in proper place
    }

    loadDataIntoDashboard(){
//for each chart in active dashboard
        //pass in data and create an instance of chart.js
    }

    loadEventListeners() {

        EventBus.$on('changeDashboard', listItem => {
            console.log(listItem);
        });

        EventBus.$on('changeRange', (rangeStart, rangeEnd) => {
            console.log(rangeStart, rangeEnd);
        });

    }
}

ScDashboard.prototype.scdbData = {
    view: 'dashboards',
    node: 'overview',
    range: {
        start: null,
        end: null
    },
    viewConfig: {},
    layout: {
        navigation: {},
        dashboard: {}
    },
    viewData: {
        rough: {

        },
        polished: []
    }
};


window.onload = function() {
    let scDb = new ScDashboard('2017-11-18', '2017-12-18');
};