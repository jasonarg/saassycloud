<template>
    <div class="col-md-2 mt-3 overview-head-item">
        <span class="d-block text-muted">{{ itemName }}</span>
        <h4 class="">{{ item.value }}</h4>
    </div>
</template>

<script>

    export default {
        name: "db-range-total-item",
        props: {
            item: {
                type: Object,
                required: true
            }
        },
        computed: {
            itemName: function(){
             return _.startCase(this.item.name);
            },
            itemValue: function(){
                return number_format(this.item.name);
            }
        }
    }
</script>

<style scoped>

</style>