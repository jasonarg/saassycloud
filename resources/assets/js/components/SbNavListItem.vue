<template>
    <li class="nav-item">
        <a class="nav-link" @click="logClick" href="#">{{ labelName }}</a>
    </li>
</template>

<script>

    import { EventBus } from './../event-bus.js';

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
            logClick: function(event){
                this.$emit('log', [event]);
                this.clickCount += 1;
                EventBus.$emit('i-got-clicked', [this.clickCount]);
            }
        }
    }
</script>

<style scoped>

</style>