<template>
    <div class="row justify-content-between">
        <db-range-total-item
                v-for="item in items"
                :key="item.id"
                :item="item"
        />
    </div>
</template>

<script>
    import DbRangeTotalItem from './DbRangeTotalItem.vue';

    export default {
        name: "db-range-totalsbar",
        props: {
            items: {
                type: Array,
                required: true
            }
        },
        components: {
            'db-range-total-item': DbRangeTotalItem
        }
    }
</script>

<style scoped>

</style>