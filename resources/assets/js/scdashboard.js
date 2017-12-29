import proxyClassLoader  from './config/proxyclassloader.js';
import Dashboard from './components/Dashboard.vue';
import { EventBus } from './eventbus.js';
let d3 = require('d3');

class ScDashboard{

    /**
     * Sets up the dashboard by:
     *   Figuring out what's the current route,
     *   Loading the config for that route
     *   Loading the data for that route
     *   Loading the view
     *   Registering event handlers
     *
     * @param rangeStart
     * @param rangeEnd
     */
    constructor(){
        this.getRoute();
        this.loadConfig();
        this.loadData();
        this.loadView();
        this.loadEventListeners();
    }

    /**
     *
     * @param rangeStart
     * @param rangeEnd
     * @returns {{start: *, end: *}}
     */
    formatRange(rangeStart = null, rangeEnd = null){
        let formatTime = d3.timeFormat("%Y-%m-%d");
        let parseTime = d3.timeParse("%Y-%m-%d");
        if(!rangeEnd){
            rangeEnd = formatTime(new Date);
        }

        if(!rangeStart){
            let rangeEndObj = parseTime(rangeEnd);
            let rangeStartObj = d3.timeDay.offset(rangeEndObj, -30);
            rangeStart = formatTime(rangeStartObj);
        }

        return {
            start: rangeStart,
            end: rangeEnd
        };

    }

    /**
     * Router
     *
     * @returns void
     */
    getRoute(){
        this.route = 'overview';
    }

    /**
     * Loads dashboard layout config files for sidebar and dashboard
     *
     * @returns void
     */
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
        this.scdbData.layout.dashboard.range = this.formatRange();
    }

    /**
     * Recursive method to return a flattened array of all chart names defined in a nested layout.json file
     *
     * @param rows
     * @returns {Array}
     */
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

    /**
     * Load's the Vue.js instance
     *
     * @returns void
     */
    loadView(){
        this.app = new Vue({
            el: '#vue-main',
            data: this.scdbData,
            components: {
                'dashboard': Dashboard
            }
        });
    }

    /**
     * Requests data needed for current route from the api via axios promise,
     * upon fulfillment, stores it in this.scdbData.routeData.rough
     * Calls this.polishDataAndLoadIntoDashboard()
     *
     * @returns void
     */
    loadData(){
         axios.get(`/api/${this.route}/${this.scdbData.layout.dashboard.range.start}/${this.scdbData.layout.dashboard.range.end}`)
            .then( (response) => {
                this.scdbData.routeData.rough = response.data;
                this.polishDataAndLoadIntoChart();
            }).catch(function (error) {
                console.log(error);
        });
    }

    /**
     * Wrapper function for prepping data returned from async get call from api
     *
     * @returns void
     */
    polishDataAndLoadIntoChart(){
        this.polishData();
        this.loadDataIntoChart();
    }

    /**
     * Extracts all chart names from dashboard layout
     * Instantiates the specific ChartXXXXXX class for each chart
     * Calls polishData, setLabels, and makeDatasets
     * Stores their results in this.scdbData.routeData.charts.CHARTNAME
     */
    polishData(){
        let chartList = this.extractCharts(this.scdbData.layout.dashboard.rows);
        let stop = 0;
        for(let chart in chartList){
            //temporary until all other classes are defined
            if(stop < 1){
                let chartConfig = proxyClassLoader(`Chart${_.upperFirst(chartList[chart])}`);
                this.scdbData.routeData.charts[chartList[chart]] = {};
                this.scdbData.routeData.charts[chartList[chart]].polishedData = chartConfig.polishData(this.scdbData.routeData.rough);
                this.scdbData.routeData.charts[chartList[chart]].labels = chartConfig.setLabels(this.scdbData.layout.dashboard.range.start,
                    this.scdbData.layout.dashboard.range.end);
                let dsAndTotals = chartConfig.makeDatasets(this.scdbData.routeData.charts[chartList[chart]].labels,
                    this.scdbData.routeData.charts[chartList[chart]].polishedData);

                this.scdbData.routeData.totals = dsAndTotals.totals;
                this.scdbData.routeData.charts[chartList[chart]].datasets = dsAndTotals.datasets;
                this.scdbData.routeData.charts[chartList[chart]].config = chartConfig.config;
                this.scdbData.routeData.charts[chartList[chart]].config.data.labels = this.scdbData.routeData.charts[chartList[chart]].labels;
                this.scdbData.routeData.charts[chartList[chart]].config.data.datasets = this.scdbData.routeData.charts[chartList[chart]].datasets;

                stop = 1;
            }

        }
    }

    /**
     * For each this.scdbData.routeData.charts
     *   read in the config, load in the label and dataset data
     *   instantiate a new Chart class with this config data
     *   Update the Vue data for totals
     */
    loadDataIntoChart(){
        //for each chart in active dashboard
        //pass in data and create an instance of chart.js
        for(let i in this.scdbData.routeData.charts) {
            if (this.scdbData.charts[i]) {
                this.scdbData.charts[i].data.labels = this.scdbData.routeData.charts[i].labels;
                this.scdbData.charts[i].data.datasets = this.scdbData.routeData.charts[i].datasets;
                this.scdbData.charts[i].update();
            }
            else {
                this.scdbData.charts[i] = new Chart(document.getElementById(i).getContext("2d"), this.scdbData.routeData.charts[i].config);
            }
        }
        for(let i in this.app.$data.layout.dashboard.rangeTotals.items){
            if(this.scdbData.routeData.totals[this.app.$data.layout.dashboard.rangeTotals.items[i].name]){
                this.app.$data.layout.dashboard.rangeTotals.items[i].value = this.scdbData.routeData.totals[this.app.$data.layout.dashboard.rangeTotals.items[i].name];
            }
        }
    }


    /**
     * Loads listeners for events emitted from the global Vue event bus
     */
    loadEventListeners() {

        EventBus.$on('changeDashboard', listItem => {
            console.log(listItem);
        });

        EventBus.$on('changeRange', (range) => {
            this.scdbData.layout.dashboard.range = range;
           // this.loadConfig();
            this.loadData();
            console.log('rangeChange', range.start, range.end);
        });

    }
}

/**
 * Initial property values for this.scdbData
 *
 * @type {{view: string, route: string, range: {start: null, end: null}, viewConfig: {}, layout: {navigation: {}, dashboard: {}}, routeData: {rough: {}, charts: {}}}}
 */
ScDashboard.prototype.scdbData = {
    view: 'dashboards',
    route: 'overview',
    viewConfig: {},
    layout: {
        navigation: {},
        dashboard: {}
    },
    charts: {

    },
    routeData: {
        rough: {

        },
        charts: {

        }
    }
};

window.onload = function() {
    let scDb = new ScDashboard();
};