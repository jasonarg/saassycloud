<template>
    <div class="row justify-content-center my-0">
        <div class="col-md-12 mt-0 mb-2 p-2">
            <div id="" class="chartWrapper my-0 mx-0 p-3 bg-white border">
                <canvas id="overviewCombined" class="scChart" style="height:400px;width: content-box;"></canvas>
            </div>
        </div>
    </div>
</template>

<script>

    import DbCol from './DbCol.vue';

    export default {
        name: "db-row",
        props: {
            row: {
                type: Object,
                required: true
            }
        },
        mounted(){
            console.log(this.row);
        }
    }
</script>

<style scoped>

</style>