<template>
    <li class="nav-item">
        <a class="nav-link active" href="#">{{ listitem.name }}</a>
    </li>
</template>

<script>
    export default {
        name: "sb-nav-list-item",
        props: {
            listitem: Object
        }
    }
</script>

<style scoped>

</style>