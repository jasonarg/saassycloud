<template>
    <li class="nav-item">Analytics
        <ul class="nav flex-column">
            <sb-nav-list-item v-for="listitem in list.listitems"  :key="listitem.id"  v-bind="listitem"></sb-nav-list-item>
            <li class="nav-item">
                <a class="nav-link" href="#">Page Views</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sessions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Conversions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Revenue</a>
            </li>
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
        components: {
            'sb-nav-list-item': SbNavListItem
        }
    }
</script>

<style scoped>

</style>