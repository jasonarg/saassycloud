<template>
    <li class="nav-item">{{ list.name }}
        <ul class="nav flex-column">
            <sb-nav-list-item v-for="listitem in list.listitems"
                              :key="listitem.id"
                              :listitem="listitem"
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
        components: {
            'sb-nav-list-item': SbNavListItem
        }
    }
</script>

<style scoped>

</style>