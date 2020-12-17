<template>
    <div class="sidebar">
        <div class="sidebar-backdrop" @click="closeSidebarPanel" v-if="isPanelOpen"></div>
        <div class="d-lg-none">
            <transition name="slide">
                <div 
                    class="sidebar-panel"
                    v-if="isPanelOpen"
                >
                    <slot></slot>
                </div>
            </transition>
        </div>
        <div class="d-none d-lg-block">
            <transition name="slide">
                <div v-if="isPanelOpen">
                    <slot></slot>
                </div>
            </transition>
        </div>
    </div>
</template>
<script>
    import { store, mutations } from '../../store.js'

    export default {
        methods: {
            closeSidebarPanel: mutations.toggleNav
        },
        computed: {
            isPanelOpen() {
                return store.isNavOpen
            }
        }
    }
</script>
<style scoped>
    .slide-enter-active,
    .slide-leave-active
    {
        transition: transform 0.2s ease;
    }

    .slide-enter,
    .slide-leave-to {
        transform: translateX(-100%);
        transition: all 150ms ease-in 0s
    }

    .sidebar-backdrop {
        background-color: rgba(0,0,0,.5);
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        cursor: pointer;
        z-index: 1;
    }

    .sidebar-panel {
        overflow-y: auto;
        background-color: #1E1E1E;
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        z-index: 999;
        padding: 3rem 20px 2rem 20px;
        width: 300px;
    }
</style>