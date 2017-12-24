<template>
    <li class="nav-item">{{ labelName }}
        <ul class="nav flex-column">
            <sb-nav-list-item v-for="listItem in list.listitems"
                              :key="listItem.id"
                              :listItem="listItem"
                              v-on:log="changeDb"
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
            changeDb: function(event){
                console.log(event);
            }
        },
        components: {
            'sb-nav-list-item': SbNavListItem
        }
    }
</script>

<style scoped>

</style>