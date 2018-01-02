import { ScChart } from './../../../scchart.js';

export default class ChartTrialToSalesByPackage extends ScChart{
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

        return ['SaaSsy', 'SaaSsier', 'SaaSsiest'];


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
        for(let h in this.datasets) {
            let dataset = [0,0,0];
            for (let i in polishedData) {
                for (let j in polishedData[i]) {
                    dataset = this.datasets[h].summaryFunction(dataset, polishedData[i][j]);
                }
            }
            this.datasets[h].dataset.data = dataset;
            this.setDatasetColor(h);
            returnData.datasets.push(this.datasets[h].dataset);
        }


        return returnData;

    }
}

/**
 * Boilerplate chart.js config object for the chart
 *
 * @type {{type: string, data: {labels: Array, datasets: Array}, options: {responsive: boolean, maintainAspectRatio: boolean, title: {display: boolean, text: string}, tooltips: {mode: string, intersect: boolean}, hover: {mode: string, intersect: boolean}, scales: {xAxes: *[], yAxes: *[]}}}}
 */
ChartTrialToSalesByPackage.prototype.config = {
    type: "bar",
    data: {
        labels: [],
        datasets: []
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: "Trial to Sales by Package"
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
                        labelString: "Package"
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

/**
 * Datasets used by this chart
 * @type {*[]}
 */
ChartTrialToSalesByPackage.prototype.datasets = [
    {
        name: "trials",
        summaryFunction(dataset, polishedDataSegment){
            if (polishedDataSegment.rel.co && polishedDataSegment.rel.co.attributes.converted === 1
                && polishedDataSegment.rel.co.attributes.conversionType === 'trial'){
                let productPackage = polishedDataSegment.rel.co.relationships.chosenPackage.name;
                if (productPackage === "SaaSsy") {
                    dataset[0]++;
                }
                else if (productPackage === "SaaSsier") {
                    dataset[1]++;
                }
                else if (productPackage === "SaaSsiest") {
                    dataset[2]++;
                }
            }
            return dataset;
        },
        dataset:
            {
                label: "Trials",
                backgroundColor: "yellow",
                borderColor: "yellow",
                data: []
            }
    },
    {
        name: "sales",
        summaryFunction(dataset, polishedDataSegment){
            if (polishedDataSegment.rel.co && polishedDataSegment.rel.co.relationships.sale) {
                let productPackage = polishedDataSegment.rel.co.relationships.chosenPackage.name;
                if (productPackage === "SaaSsy") {
                    dataset[0]++;
                }
                else if (productPackage === "SaaSsier") {
                    dataset[1]++;
                }
                else if (productPackage === "SaaSsiest") {
                    dataset[2]++;
                }
            }
            return dataset;
        },
        dataset:
            {
                label: "Sales",
                backgroundColor: "green",
                borderColor: "green",
                data: []
            }
    }
];
