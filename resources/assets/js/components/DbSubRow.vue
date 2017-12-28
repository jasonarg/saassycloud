<template>
    <div class="row justify-content-center my-0 py-0">
        <db-sub-col
            v-for="element in row.elements"
            :key="element.id"
            :element="element"
            :height="row.height"
        />
    </div>
</template>

<script>

    import DbSubCol from './DbSubCol.vue';

    export default {
        name: "db-sub-row",
        props: {
            row: {
                type: Object,
                required: true
            }
        },
        components: {
            'db-sub-col': DbSubCol
        },
        mounted(){
        }
    }
</script>

<style scoped>

</style>