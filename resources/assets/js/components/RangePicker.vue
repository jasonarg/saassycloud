<template>
    <div class="d-inline">
        <input id="dashboardRange" type="text" class="form-input float-right pl-3 mb-1" style="width: 280px; font-size: .8rem;" v-bind:placeholder="placeHolder" v-on:click="toggleRangePicker"/>

    <div class="position-absolute bg-light border border-secondary" v-if="seen" style="right: 10%; z-index: 10000;">
        <div class="container p-3">
            <div class="row">
                <div class="col-6">
                    <h5 class="secondary">Range Start Date</h5>
                    <date-picker
                            :key="range.start"
                            :value="range.start"
                            :inline="true"
                            :disabled="{from: parseTime(this.temporaryRange.end)}"
                            wrapper-class="d-inline-block mx-1 my-3 align-top"
                            v-on:selected="updateRangeStart"
                    />
                </div>
                <div class="col-6">
                    <h5 class="secondary">Range End Date</h5>
                    <date-picker
                            :key="range.end"
                            :value="range.end"
                            :inline="true"
                            :disabled="{to: parseTime(this.temporaryRange.start)}"
                            wrapper-class="d-inline-block mx-1 my-3 align-top"
                            v-on:selected="updateRangeEnd"
                    />
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-4">
                    <button class="btn btn-info float-right ml-2 mr-1" v-on:click="updateRange">Submit</button>
                    <button class="btn btn-outline-secondary bg-white float-right" v-on:click="toggleRangePicker">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    </div>
</template>

<script>
    import { EventBus } from './../eventbus.js';
    import Datepicker from "vuejs-datepicker";
    const d3 = require('d3');

    export default {
        name: "range-picker",
        props: {
            range: {
                type: Object,
                required: true
            }
        },
        computed: {
            placeHolder: function(){
                let rangeStartStrObj = this.parseTime(this.range.start);
                let rangeEndStrObj = this.parseTime(this.range.end);

                return `${this.formatTime(rangeStartStrObj, "long")} - ${this.formatTime(rangeEndStrObj, "long")}`;
            }
        },
        data(){
            return {
                seen: false,
                temporaryRange: this.range
            }
        },
        methods:{
            updateRange: function(){
                this.range = this.temporaryRange;
                this.toggleRangePicker();
                EventBus.$emit('changeRange', this.range);

            },
            updateRangeStart: function(event){
                this.temporaryRange.start = this.formatTime(event);
            },
            updateRangeEnd: function(event){
                this.temporaryRange.end = this.formatTime(event);
            },
            formatTime: function(date, format){
                let d3FormatTime = d3.timeFormat("%Y-%m-%d");
                if(format === "long"){
                     d3FormatTime = d3.timeFormat("%B %d, %Y");
                }
                return d3FormatTime(date);
            },
            parseTime: function(dateStr){
                let d3ParseTime = d3.timeParse("%Y-%m-%d");
                return d3ParseTime(dateStr);
            },
            toggleRangePicker: function(){
                this.seen = !this.seen;
            }
        },
        components:{
            'date-picker': Datepicker
        }
    }
</script>

<style scoped>

</style>