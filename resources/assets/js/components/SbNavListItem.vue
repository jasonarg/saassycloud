<template>
    <li class="nav-item">
        <a class="nav-link" v-bind:class="{active: listItem.active}" @click="changeDashboard" href="#">{{ labelName }}</a>
    </li>
</template>

<script>

    import { EventBus } from './../eventbus.js';

    export default {
        name: "sb-nav-list-item",
        data() {
            return {
                clickCount: 0
            }
        },
        props: {
            listItem: Object,
            required: true
        },
        computed: {
            labelName: function(){
                return _.startCase(this.listItem.name);
            }
        },
        methods: {
            changeDashboard: function(){
                EventBus.$emit('changeDashboard', [this.listItem]);
            }
        }
    }
</script>

<style scoped>

</style>