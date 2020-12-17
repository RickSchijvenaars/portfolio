<template>
    <div class="page-container">
        <Menu/>
        <div class="content-wrapper">
            <transition
                name="slide"
                mode="out-in"
                enter-active-class="slideInLeft"
                leave-active-class="slideOutRight"
            >
                <router-view v-if="showPage" />
            </transition>
        </div>
    </div>
</template>

<script>
import Menu from './menu/Menu';

export default {
    components: {
        Menu,     
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
 </style>