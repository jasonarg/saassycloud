import { ScChart } from './../../../scchart.js';

export default class ChartSalesByPackage extends ScChart{
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
    setLabels(){
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
        let dataset = [0,0,0];
        for(let i in polishedData) {
            for (let j in polishedData[i]) {
                if (polishedData[i][j].rel.co && polishedData[i][j].rel.co.relationships.sale) {
                    let productPackage = polishedData[i][j].rel.co.relationships.chosenPackage.name;
                    if(productPackage === "SaaSsy"){
                        dataset[0]++;
                    }
                    else if(productPackage === "SaaSsier"){
                        dataset[1]++;
                    }
                    else if(productPackage === "SaaSsiest"){
                        dataset[2]++;
                    }
                }
            }
        }

        this.datasets[0].dataset.data = dataset;
        this.setDatasetColor(0);
        returnData.datasets.push(this.datasets[0].dataset);

        return returnData;

    }
}

/**
 * Boilerplate chart.js config object for the chart
 *
 * @type {{type: string, data: {labels: Array, datasets: Array}, options: {responsive: boolean, maintainAspectRatio: boolean, title: {display: boolean, text: string}, tooltips: {mode: string, intersect: boolean}, hover: {mode: string, intersect: boolean}, scales: {xAxes: *[], yAxes: *[]}}}}
 */
ChartSalesByPackage.prototype.config = {
    type: "doughnut",
    data: {
        labels: [],
        datasets: []
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: "Sales by Package"
        },
        tooltips: {
            mode: "index",
            intersect: false
        },
        hover: {
            mode: "nearest",
            intersect: true
        },
        cutoutPercentage: 50,
    }
};

/**
 * Datasets used by this chart
 * @type {*[]}
 */
ChartSalesByPackage.prototype.datasets = [
    {
        name: "salesByPackage",
        dataset:
            {
                backgroundColor: ["yellow", "orange", "red"],
                borderColor: ["yellow", "orange", "red"],
                data: []
            }
    }
];
