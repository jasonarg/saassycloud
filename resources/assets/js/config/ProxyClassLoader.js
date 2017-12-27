import ChartOverview from './dashboards/overview/chartoverview.js';
import ChartSaassy from './dashboards/overview/chartsaassy.js';
import ChartSaassier from './dashboards/overview/chartsaassier.js';
import ChartSaasiest from './dashboards/overview/chartsaasiest.js';
import ChartSalesAb from './dashboards/overview/chartsalesab.js';
import ChartPackageAb from './dashboards/overview/chartpackageab.js';
import ChartMonthlyAnnualAb from './dashboards/overview/chartmonthlyannualab.js';





const classes = {
    ChartOverview,
    ChartSaassy,
    ChartSaassier,
    ChartSaasiest,
    ChartSalesAb,
    ChartPackageAb,
    ChartMonthlyAnnualAb
}

class ProxyClassLoader {
    constructor (className, opts) {
        return new classes[className](opts);
    }
}

export default ProxyClassLoader;