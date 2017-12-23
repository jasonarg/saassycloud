<template>
    <div class="row">
        <sidebar-nav
                :lists="lists"
        />
        <main-pane v-bind="charts"></main-pane>
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
            charts: {
                type: Array
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
