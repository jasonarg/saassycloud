<template>
    <div class="row">
        <sidebar-nav
                :lists="lists"
        />
        <main-pane
            :lists="lists"
            :charts="charts"
            :current="current"
        />
    </div>
</template>

<script>
    import SidebarNav from './SidebarNav.vue';
    import MainPane from './MainPane.vue';

    export default {
        props: {
            lists: {
                type: Array,
                required: true
            },
            current: {
                type: Object,
                required: true
            },
            charts: {
                type: Array,
                required: true
            }
        },
        data(){
          return {}
        },
        components: {
            'sidebar-nav' : SidebarNav,
            'main-pane' : MainPane
        },
        mounted() {
        }
    }
</script>
