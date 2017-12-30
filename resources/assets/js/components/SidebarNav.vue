<template>
    <nav class="col-sm-3 col-md-2 d-none d-sm-block sidebar text-white pl-2">
        <div class="user-card my-4 clearfix">
            <img class="float-left rounded-circle profile-image-md mr-3 p-0" src="/profile/picture" />
            <h6 class="float-left mt-3 text-dark" >Welcome <br><span class="text-info">Jason</span></h6>
        </div>
        <ul class="nav">
            <sb-nav-list
                    v-for="list in navigation"
                    :key="list.id"
                    :list="list"
            />

        </ul>
    </nav>
</template>

<script>
    import SbNavList from './SbNavList.vue'
    export default {
        name: "sidebar-nav",
        props: {
            navigation: {
                type: Array
            }
        },
        data() {
            return {
            };
        },
        components: {
            'sb-nav-list': SbNavList
        }
    }
</script>

<style scoped>

</style>