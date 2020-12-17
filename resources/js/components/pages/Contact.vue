<template>
    <div class="container vh-100 ">
        <div class="row h-100 d-flex align-items-center">
            <div class="col-md-6 m-auto">
                <div class="content-item">
                    <p class="h1 title d-inline monofont">
                        
                    </p>
                    <p class="lead">
                        Hook me up!
                    </p>
                    <hr>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi icon bi-envelope" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                        </svg>
                        <a href="mailto:rickschijvenaars@gmail.com" class="text-white text-decoration-none">E-mail</a>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi icon bi-linkedin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212h-2.4s.03-6.547 0-7.225h2.4v1.023a5.54 5.54 0 0 0-.016.025h.016v-.025c.32-.493.89-1.193 2.165-1.193 1.58 0 2.764 1.033 2.764 3.252v4.143h-2.4V9.529c0-.972-.348-1.634-1.217-1.634-.664 0-1.059.447-1.233.878-.063.154-.079.37-.079.586v4.035z"/>
                        </svg>
                        <a href="https://www.linkedin.com/in/rickschijvenaars/" target="_blank" class="text-white text-decoration-none">LinkedIn</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
        }
    },
    methods: {
        typeMessage(){
            new Typed(".title", {
                strings: [
                    "Want to know more?", 
                ],
                typeSpeed: 50,
                smartBackspace: true,
                backSpeed: 50,
                showCursor: true,
            });
        }
    },
    mounted() {
        this.typeMessage();
    }
}
</script>
<style lang="scss">
.typed-cursor {
    display: inline;
}
.icon {
    margin-top: -3px;
}
</style>