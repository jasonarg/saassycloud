let {ScChart} = require('./scchart.js');

class ScDashboard{

    constructor(dbType){
        this.dbType = dbType;
        this.scChart = new ScChart();
        this.getData();

    }

    getRangeStart(){
        return '2017-12-05';
    }

    getRangeEnd(){
        return '2017-12-19';
    }

    getData(){
        axios.get(`/api/${this.dbType}/${this.getRangeStart()}/${this.getRangeEnd()}`)
            .then( (response) => {
                this.scChart.init(response.data);
            }).catch(function (error) {
            console.log(error);
        });
    }
}


window.onload = function() {
    let dbType = document.querySelector('#dashboard').getAttribute('data-dashboard');
    let scdb = new ScDashboard(dbType);
};