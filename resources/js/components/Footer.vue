<template>
    <div class="footer">
        <p class="">© Rick Schijvenaars | {{ new Date().getFullYear() }}</p>
    </div>
</template>
<script>
    export default {
        methods: {
        },
        computed: {
            
        }
    }
</script>
<style lang="scss" scoped>
.footer{
    height: 80px;
    background-color: #1E1E1E;
    color: #9B9B9B;
    position: absolute;
    bottom: 0;
    width: 100%;
}
</style>