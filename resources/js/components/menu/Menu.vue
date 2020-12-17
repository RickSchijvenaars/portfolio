<template>
    <div>
        <nav class="main-nav">
            <router-link to="/projects" class="main-nav-arrow" v-if="$route.name == 'project'">
              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
            </router-link>
            <Burger class="ml-auto"></Burger>
        </nav>

        <Bar class="d-lg-none">
            <ul class="sidebar-panel-nav">
              <li class="monofont"><router-link to="/">Home.</router-link></li>
              <li class="monofont"><router-link to="/about">About me.</router-link></li>
              <li class="monofont"><router-link to="/projects">Projects.</router-link></li>
              <li class="monofont"><router-link to="/contact">Contact.</router-link></li> 
            </ul>
        </Bar>
        <Bar class="d-none d-lg-block">
            <ul class="row m-0 upperbar list-inline">
              <li class="monofont list-inline-item text-center col-3 m-0"><router-link to="/">Home.</router-link></li>
              <li class="monofont list-inline-item text-center col-3 m-0"><router-link to="/about">About me.</router-link></li>
              <li class="monofont list-inline-item text-center col-3 m-0"><router-link to="/projects">Projects.</router-link></li>
              <li class="monofont list-inline-item text-center col-3 m-0"><router-link to="/contact">Contact.</router-link></li> 
            </ul>
        </Bar>
    </div>
</template>

<script>
import Burger from './Burger.vue';
import Bar from './Bar.vue';

export default {
 name: 'app',
 components: {
   Burger,
   Bar
 }
}
</script>
<style lang="scss" scoped>
 .main-nav {
   display: flex;
   position: fixed;
   right: 0;
   padding: 0.5rem 0.8rem;
   z-index: 1000;
   height: 60px;
   align-items: center;

   &-arrow {
     display: flex;
    position: fixed;
    left: 0;
    padding: 0.5rem 0.8rem;
    z-index: 1000;
    height: 60px;
    align-items: center;
     color: white;
   }
 }

 ul.sidebar-panel-nav {
   list-style-type: none;
 }

ul.sidebar-panel-nav > li > a,
ul.upperbar > li > a {
   color: #fff;
   text-decoration: none;
   font-size: 1.5rem;
   display: block;
   padding: 0.5em 0;
 }

 .upperbar {
  z-index: 999;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  background-color: black;
 }
</style>