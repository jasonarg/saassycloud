<template>
    <div class="row justify-content-center my-0">
        <db-col

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