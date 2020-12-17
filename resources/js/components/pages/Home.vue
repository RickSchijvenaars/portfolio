<template>
    <div class="vh-100 d-flex align-items-center justify-content-center">
        <span class="text-white message"></span>
    </div>
</template>

<script>
export default {
    data() {
        return {
        }
    },
    methods: {
        typeMessage(){
            new Typed(".message", {
                strings: [
                    "Hello.", 
                    "My name is Rick.",
                    "Welcome to my portfolio."
                ],
                typeSpeed: 50,
                smartBackspace: true,
                backSpeed: 50,
                showCursor: false,
            });
        }
    },
    mounted() {
        this.typeMessage();
    }
}
</script>
<style lang="scss" scoped>
    .message {
        font-family: PixelFont;
        font-size: 13vw;
    }
</style>