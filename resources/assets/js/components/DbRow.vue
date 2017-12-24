<template>
    <div class="row justify-content-center my-0">
        <db-col
            v-for="element in row.elements"
            :key="element.id"
            :element="element"
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
            console.log(this.row);
        }
    }
</script>

<style scoped>

</style>