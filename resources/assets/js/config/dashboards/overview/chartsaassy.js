let d3 = require('d3');
import { ScChart } from './../../../scchart.js';

export default class ChartSaassy extends ScChart{
    /**
     * Polishes Raw api data needed for chart rendering
     *
     * @param data
     *
     * @returns Object
     */
    polishData(data) {
        let dates = _.groupBy(data.sessions, (session) => {
            let date = new Date(session.a.at.replace(/\s/, 'T'));
            return `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`;
        });

        return dates;
    }

    /**
     * Creates labels for the associated chart.js chart
     *
     * @param rangeStart
     * @param rangeEnd
     * @returns {Array}
     */
    setLabels(rangeStart, rangeEnd){
        let parseTime = d3.timeParse("%Y-%m-%d");
        let rangeEndObj = parseTime(rangeEnd);
        let rangeEndPlusOneObj = d3.timeDay.offset(rangeEndObj, +1);
        let range = d3.timeDay.range(new Date(rangeStart), rangeEndPlusOneObj);
        let labels = [];
        for(let i = 0; i < range.length; i++){
            labels[i] = `${range[i].getFullYear()}-${range[i].getMonth() + 1}-${range[i].getDate()}`
        }
        return labels;
    }

    /**
     * Creates all datasets needed for the associated chart.js instance
     *
     * @param labels
     * @param polishedData
     * @returns {*}
     */
    makeDatasets(labels, polishedData){
        let returnData = {
            datasets: []
        };
        for(let i in this.datasets){
            let summaryData = [];
            for(let j = 0; j < labels.length; j++){
                summaryData[j] = this.datasets[i].summaryFunction(labels[j], polishedData);
            }
            this.datasets[i].dataset.data = summaryData;
            this.setDatasetColor(i);
            returnData.datasets.push(this.datasets[i].dataset);
        }


        return returnData;
    }
}

/**
 * Boilerplate chart.js config object for the chart
 *
 * @type {{type: string, data: {labels: Array, datasets: Array}, options: {responsive: boolean, maintainAspectRatio: boolean, title: {display: boolean, text: string}, tooltips: {mode: string, intersect: boolean}, hover: {mode: string, intersect: boolean}, scales: {xAxes: *[], yAxes: *[]}}}}
 */
ChartSaassy.prototype.config = {
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
            text: "SaaSsy Package Conversions by A/B Group"
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
                        labelString: "Conversions"
                    }
                }
            ]
        }
    }
};

/**
 * Datasets used by this chart
 * @type {*[]}
 */
ChartSaassy.prototype.datasets = [
    {
        name: "saassyAbGroupA",
        summaryFunction(label, polishedData){
            let returnData = 0;
            if(label in polishedData){
                for(let j = 0; j < polishedData[label].length; j++){
                    if(polishedData[label][j].rel.co && polishedData[label][j].rel.co.attributes.converted == 1
                        && polishedData[label][j].rel.co.attributes.conversionType != 'login') {
                        if(polishedData[label][j].rel.co.relationships.chosenPackage.name == "SaaSsy"
                        && polishedData[label][j].rel.co.relationships.abViewGroup.name == "ConversionA"){
                            returnData += 1;
                        }
                    }
                }

            }
            return returnData;
        },
        dataset:
            {
                label: "A/B Group A",
                fill: false,
                borderColor: "blue",
                data: []
            }
    },
    {
        name: "saassyAbGroupB",
        summaryFunction(label, polishedData){
            let returnData = 0;
            if(label in polishedData){
                for(let j = 0; j < polishedData[label].length; j++){
                    if(polishedData[label][j].rel.co && polishedData[label][j].rel.co.attributes.converted == 1
                        && polishedData[label][j].rel.co.attributes.conversionType != 'login') {
                        if(polishedData[label][j].rel.co.relationships.chosenPackage.name == "SaaSsy"
                            && polishedData[label][j].rel.co.relationships.abViewGroup.name == "ConversionB"){
                            returnData += 1;
                        }
                    }
                }

            }
            return returnData;
        },
        dataset:
            {
                label: "A/B Group B",
                fill: false,
                borderColor: "yellow",
                data: []
            }
    }
];
