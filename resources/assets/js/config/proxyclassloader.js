import ChartOverview from './dashboards/overview/chartoverview.js';
import ChartSaassy from './dashboards/overview/chartsaassy.js';
import ChartSaassier from './dashboards/overview/chartsaassier.js';
import ChartSaassiest from './dashboards/overview/chartsaassiest.js';
import ChartSalesAb from './dashboards/overview/chartsalesab.js';
import ChartPackageAb from './dashboards/overview/chartpackageab.js';
import ChartMonthlyAnnualAb from './dashboards/overview/chartmonthlyannualab.js';

const classes = {
    ChartOverview,
    ChartSaassy,
    ChartSaassier,
    ChartSaassiest,
    ChartSalesAb,
    ChartPackageAb,
    ChartMonthlyAnnualAb
}

export default function proxyClassLoader(className){
    return new classes[className];
}