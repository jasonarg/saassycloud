<template>
    <li class="nav-item">{{ labelName }}
        <ul class="nav flex-column">
            <sb-nav-list-item
                v-for="listItem in list.listItems"
                :key="listItem.id"
                :listItem="listItem"
            />
        </ul>
    </li>
</template>

<script>

    import SbNavListItem from './SbNavListItem.vue'

    export default {
        name: "sb-nav-list",
        props: {
            list: {
                type: Object
            }
        },
        computed: {
            labelName: function(){
                return _.startCase(this.list.name);
            }
        },
        methods: {
        },
        components: {
            'sb-nav-list-item': SbNavListItem
        }
    }
</script>

<style scoped>

</style>