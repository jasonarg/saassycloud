<template>
    <li class="nav-item">
        <a class="nav-link" href="#">{{ labelName }}</a>
    </li>
</template>

<script>
    export default {
        name: "sb-nav-list-item",
        props: {
            listItem: Object,
            required: true
        },
        computed: {
            labelName: function(){
                return _.startCase(this.listItem.name);
            }
        }
    }
</script>

<style scoped>

</style>