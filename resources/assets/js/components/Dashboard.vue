<template>
    <div class="row">
        <sidebar-nav
                :navigation="navigation"
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
            navigation: {
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
