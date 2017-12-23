<template>
    <li class="nav-item">
        <a class="nav-link" href="#">{{ listitem.name }}</a>
    </li>
</template>

<script>
    export default {
        name: "sb-nav-list-item",
        props: {
            listitem: Object,
            required: true
        }
    }
</script>

<style scoped>

</style>