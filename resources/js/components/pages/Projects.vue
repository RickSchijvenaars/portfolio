<template>
    <div class="justify-content-center">
        <span class="d-none d-lg-flex projects-title text-white monofont"> 
            Projects.
        </span>
        <div class="row content-margin">
            <router-link :to="{ name: 'project', params: { title: project.title, project: project }}" v-for="project in projects.reverse()" :key="project.id" class="col-sm-6 col-md-4 col-xl-3 p-0">
                <div class="flip-card animated zoomIn">
                    <div class="flip-card-inner">
                        <div class="flip-card-front" v-bind:style="{ backgroundImage: 'url(/images/' + project.source + ')'}">
                            <div class="flip-card-front-overlay w-100 h-100">
                            </div>
                        </div>
                        <div class="flip-card-back" style="overflow:hidden;">
                            <h3 class="flip-card-title">{{ project.title }}</h3>
                            <hr>
                            <p style="flip-card-description max-height: 80%;overflow:hidden;">{{ project.description }}</p>
                        </div>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            projects: [],
        }
    },
    methods: {
        loadProjects(){
            axios.get('../api/projects').then(response => this.projects = response.data);
        },
    },
    mounted() {
        this.loadProjects();
    }
}
</script>
<style lang="scss" scoped>
    .flip-card {
        background-color: transparent;
        height: 400px;
        perspective: 1000px;
        &-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        &-front {
            color: black;
            z-index: 2;
            height: 100%;
            background-position: center;
            background-size: cover;

            &-overlay {
                background-color: rgba(0,0,0,.4);
            }
        }
        &-back {
            padding: 20px;
            background-color: #1E1E1E;
            transform: rotateY(180deg);
            z-index: 1;
            color: white;
        }
        &-front,
        &-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }
        &-title {
            color: #E1E1E1;
        }
        &-description {
            color: #9B9B9B;
        }
        
        &:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
    }
    .imagecontainer {
        overflow: hidden;
        padding: 0!important;
        margin: 10px !important;
        position: relative;
        height: 300px;
        background-position: center;
        background-size: cover;
        border: 2px solid black;
    }
    .projects-title {
        position: absolute;
        left: 0;
        top: 0;
        height: 60px;
        align-items: center;
        font-size: 1.5rem;
        padding-left: 0.8rem;
    }
    @media only screen and (min-width: 992px) {
        .content-margin {
            margin-top: 60px;
        }
    }
</style>
