<template>
    <div class="page-container">
        <Menu/>
        <div class="content-wrapper">
            <!-- <transition name="fade" mode="out-in"> -->
                <transition
                    name="slide"
                    mode="out-in"
                    enter-active-class="slideInLeft"
                    leave-active-class="slideOutRight"
                >
                    <router-view v-if="showPage" />
                </transition>
            <!-- </transition> -->
        </div>
        <!-- <Footer/> -->
    </div>
</template>

<script>
import Footer from './Footer';
import Menu from './menu/Menu';

export default {
    components: {
        Menu, 
        Footer
    },
    data() {
      return {
          showPage: true
      }
    },

}
</script>

<style lang="scss" scoped>
    .page-container {
        position: relative;
        min-height: 100vh;
        background-color: #121212;
        overflow: hidden;
    }

    // .fade-enter-active,
    // .fade-leave-active {
    //     transition-duration: 0.3s;
    //     transition-property: opacity;
    //     transition-timing-function: ease;
    // }

    // .fade-enter,
    // .fade-leave-active {
    //     opacity: 0
    // }
 </style>