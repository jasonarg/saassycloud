import ChartOverview from './dashboards/overview/chartoverview.js';
import ChartSaassy from './dashboards/overview/chartsaassy.js';
import ChartSaassier from './dashboards/overview/chartsaassier.js';
import ChartSaassiest from './dashboards/overview/chartsaassiest.js';
import ChartSalesByPackage from './dashboards/overview/chartsalesbypackage.js';
import ChartTrialToSalesByPackage from './dashboards/overview/charttrialtosalesbypackage.js';
import ChartSalesByMonthlyOrAnnualPaymentByPackage from './dashboards/overview/chartsalesbymonthlyorannualpaymentbypackage.js';

const classes = {
    ChartOverview,
    ChartSaassy,
    ChartSaassier,
    ChartSaassiest,
    ChartSalesByPackage,
    ChartTrialToSalesByPackage,
    ChartSalesByMonthlyOrAnnualPaymentByPackage
}

export default function proxyClassLoader(className){
    return new classes[className];
}