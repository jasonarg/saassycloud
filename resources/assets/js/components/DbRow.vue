<template>
    <div class="row justify-content-center my-0">
        <db-col
            v-for="element in row.elements"
            :key="element.id"
            :element="element"
            :height="row.height"
        />
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
        components: {
            'db-col': DbCol
        },
        mounted(){
        }
    }
</script>

<style scoped>

</style>