import ChartOverview from './dashboards/overview/chartoverview.js';
import ChartSaassy from './dashboards/overview/chartsaassy.js';
import ChartSaassier from './dashboards/overview/chartsaassier.js';
import ChartSaassiest from './dashboards/overview/chartsaassiest.js';
import ChartSalesByPackage from './dashboards/overview/chartsalesbypackage.js';
import ChartPackageAb from './dashboards/overview/chartpackageab.js';
import ChartMonthlyAnnualAb from './dashboards/overview/chartmonthlyannualab.js';

const classes = {
    ChartOverview,
    ChartSaassy,
    ChartSaassier,
    ChartSaassiest,
    ChartSalesByPackage,
    ChartPackageAb,
    ChartMonthlyAnnualAb
}

export default function proxyClassLoader(className){
    return new classes[className];
}