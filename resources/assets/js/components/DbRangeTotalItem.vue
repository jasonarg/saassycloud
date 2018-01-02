<template>
    <div class=" col-6 col-md-2 mt-3 overview-head-item">
        <span class="d-block text-muted">{{ itemName }}</span>
        <h4 class="">{{ itemValue }}</h4>
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
                let numberFormatter = new Intl.NumberFormat('en-US');
                if(this.item.type === "money"){
                    numberFormatter = new Intl.NumberFormat('en-US', {
                        style: 'currency',
                        currency: 'USD'
                    });
                }
                return numberFormatter.format(this.item.value);
            }
        }
    }
</script>

<style scoped>

</style>