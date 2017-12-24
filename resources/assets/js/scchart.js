let _ = require('lodash');
let d3 = require('d3');

class ScChart {

    constructor(){
        this.totals = {};
        this.groupedData = {};
    }

    init(data){
        this.groupedData = this.groupData(data);
        this.setLabels();
        this.loadDataSet(this.groupedData);
        this.myLine = new Chart(document.getElementById("overviewCombined").getContext("2d"), this.config);

    };

    loadDataSet(){
        let summaryData = [];
        let dataTotals = 0;
        for(let i = 0; i < this.config.data.labels.length; i++){
            summaryData[i] = this.config.data.labels[i] in this.groupedData ? this.groupedData[this.config.data.labels[i]].length : 0;
            dataTotals += summaryData[i];
        }
        let dataset = {
            label: "Sessions",
            fill: true,
            backgroundColor: window.chartColors.green,
            borderColor: window.chartColors.green,
            data: summaryData
        };
        this.config.data.datasets.push(dataset);
        this.totals.sessions = dataTotals;


        summaryData = [];
        for(let i = 0; i < this.config.data.labels.length; i++){
            if(this.config.data.labels[i] in this.groupedData){
                summaryData[i] = 0;
                for(let j = 0; j < this.groupedData[this.config.data.labels[i]].length; j++){
                    summaryData[i] += this.groupedData[this.config.data.labels[i]][j].rel.rc;
                }

            }
            else{
                summaryData[i] = 0;
            }
        }
        dataset = {
            label: "Page Views",
            fill: true,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data: summaryData
        }
        this.config.data.datasets.push(dataset);



        //console.log(this.totals);
    }

    groupData(data) {
        let dates = _.groupBy(data.sessions, (session) => {
            let date = new Date(session.a.at);
            return `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`;
        });



        return dates;
    };

    getRangeStart(){
        return '2017-11-18';
    }

    getRangeEnd(){
        return '2017-12-19';
    }

    setLabels(){
        let range = d3.timeDay.range(new Date(this.getRangeStart()), new Date(this.getRangeEnd()));
        let labels = [];
        for(let i = 0; i < range.length; i++){
            labels[i] = `${range[i].getFullYear()}-${range[i].getMonth() + 1}-${range[i].getDate()}`
        }
        this.config.data.labels = labels;
    };

    colorNames(){
        return Object.keys(window.chartColors);
    };


};

ScChart.prototype.config = {
    type: 'line',
    data: {
        labels: [],
        datasets: []
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: 'SaaSsy Cloud Analytics: Overview'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Date'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    }
};

module.exports = {ScChart};