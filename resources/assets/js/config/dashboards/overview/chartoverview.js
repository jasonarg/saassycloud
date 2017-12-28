let d3 = require('d3');
import { ScChart } from './../../../scchart.js';

export default class ChartOverview extends ScChart{

     polishData(data) {
        let dates = _.groupBy(data.sessions, (session) => {
            let date = new Date(session.a.at);
            return `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`;
        });

        return dates;
    };

    setLabels(rangeStart, rangeEnd){
        let range = d3.timeDay.range(new Date(rangeStart), new Date(rangeEnd));
        let labels = [];
        for(let i = 0; i < range.length; i++){
            labels[i] = `${range[i].getFullYear()}-${range[i].getMonth() + 1}-${range[i].getDate()}`
        }
        return labels;
    };

    makeDatasets(labels, polishedData){
        let returnData = {};
        returnData.totals = {};
        returnData.datasets = [];
        this.datasets = [
            {
                name: "session",
                summaryFunction(label){
                   return label in polishedData ? polishedData[label].length : 0;
                },
                dataset:
                {
                    label: "Sessions",
                    fill: true,
                    backgroundColor: this.colors.green,
                    borderColor: this.colors.green,
                    data: []
                }
            },
            {
                name: "pageViews",
                summaryFunction(label){
                    let returnData = 0;
                    if(label in polishedData){
                        for(let j = 0; j < polishedData[label].length; j++){
                            returnData += polishedData[label][j].rel.rc;
                        }

                    }
                    return returnData;
                },
                dataset:
                {
                    label: "Page Views",
                    fill: true,
                    backgroundColor: this.colors.blue,
                    borderColor: this.colors.blue,
                    data: []
                }
            }
        ];
        for(let i in this.datasets){
            let summaryData = [];
            let dataTotals = 0;
            for(let j = 0; j < labels.length; j++){
                summaryData[j] = this.datasets[i].summaryFunction(labels[j]);
                dataTotals += summaryData[j];
            }
            this.datasets[i].dataset.data = summaryData;
            returnData.datasets.push(this.datasets[i].dataset);
            returnData.totals[this.datasets[i]] = dataTotals;
        }


        return returnData;
    }
}

ChartOverview.prototype.config = {
    type: "line",
    data: {
        labels: [],
        datasets: []
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: "SaaSsy Cloud Analytics: Overview"
        },
        tooltips: {
            mode: "index",
            intersect: false
        },
        hover: {
            mode: "nearest",
            intersect: true
        },
        scales: {
            xAxes: [
                {
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: "Date"
                    }
                }
            ],
            yAxes: [
                {
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: "Value"
                    }
                }
            ]
        }
    }
};
