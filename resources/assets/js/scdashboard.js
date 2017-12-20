let _ = require('lodash');
let d3 = require('d3');

function load() {
    console.log("load event detected!");
}

class ScChart {

    getRangeStart(){
        return '2017-12-05';
    }

    getRangeEnd(){
        return '2017-12-19';
    }

    init(data){
        let groomedData = this.groomData(data);
        this.setLabels();
        this.loadDataSet(groomedData);
        this.myLine = new Chart(document.getElementById("overview").getContext("2d"), this.config);

    };

    loadDataSet(groomedData){
        let summaryData = [];
        for(let i = 0; i < this.config.data.labels.length; i++){
            summaryData[i] =this.config.data.labels[i] in groomedData ? groomedData[this.config.data.labels[i]].length : 0;
        }
        let dataset = {
            label: "Sessions",
            fill: true,
            backgroundColor: window.chartColors.green,
            borderColor: window.chartColors.green,
            data: summaryData
        }
        this.config.data.datasets.push(dataset);
    }

    groomData(data) {
        let dates = _.groupBy(data.sessions, (session) => {
            let date = new Date(session.a.at);
            return `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`;
        });



        return dates;
    };

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
        labels: ["Jan", "Feb", "mar", "Apr", "may", "Jun"],
        datasets: []
    },
    options: {
        responsive: true,
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
                    labelString: 'Month'
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

window.onload = function() {
    load();
    let scChart = new ScChart();

    axios.get(`/api/overview/${scChart.getRangeStart()}/${scChart.getRangeEnd()}`)
    .then(function (response) {
        scChart.init(response.data);
    }).catch(function (error) {
        console.log(error);
    });


};