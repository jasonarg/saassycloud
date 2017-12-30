class ScChart {

    /**
     * Updates a dataset's color to the translucent rgba value as defined in the colors property.
     *
     * @param i the index of the dataset to update
     */
    setDatasetColor(i){
        if(Array.isArray(this.datasets[i].dataset.backgroundColor)){
            for(let j in this.datasets[i].dataset.backgroundColor){
                this.datasets[i].dataset.backgroundColor[j] = this.colors[this.datasets[i].dataset.backgroundColor[j]] ? this.colors[this.datasets[i].dataset.backgroundColor[j]] : this.datasets[i].dataset.backgroundColor[j];
            }
        }
        else {
            this.datasets[i].dataset.backgroundColor = this.colors[this.datasets[i].dataset.backgroundColor] ? this.colors[this.datasets[i].dataset.backgroundColor] : this.datasets[i].dataset.backgroundColor;
        }
        if(Array.isArray(this.datasets[i].dataset.borderColor)){
            for(let j in this.datasets[i].dataset.borderColor){
                this.datasets[i].dataset.borderColor[j] = this.colors[this.datasets[i].dataset.borderColor[j]] ? this.colors[this.datasets[i].dataset.borderColor[j]] : this.datasets[i].dataset.borderColor[j];
            }
        }
        else{
            this.datasets[i].dataset.borderColor = this.colors[this.datasets[i].dataset.borderColor] ? this.colors[this.datasets[i].dataset.borderColor] : this.datasets[i].dataset.borderColor;
        }
    }

};

ScChart.prototype.colors = {
    red: 'rgba(255, 99, 132, .6)',
    orange: 'rgba(255, 159, 64, .6)',
    yellow: 'rgba(255, 205, 86, .6)',
    green: 'rgba(75, 192, 192, .6)',
    blue: 'rgba(54, 162, 235, .6)',
    purple: 'rgba(153, 102, 255, .6)',
    grey: 'rgba(201, 203, 207, .6)'
};

module.exports = {ScChart};