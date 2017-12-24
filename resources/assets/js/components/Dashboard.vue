<template>
    <div class="row">
        <sidebar-nav
                :lists="lists"
        />
        <main-pane
            :dashboard="dashboard"
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
            dashboard: {
                type: Object,
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
