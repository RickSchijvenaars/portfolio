<template>
    <div class="container content-margin">
        <div class="row">
            <div class="col-md-4">
               <div class="row">
                    <div class="col-12">
                        <div class="content-item">
                            <img class="img-fluid" v-bind:src="'/images/' + project.source"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-break content-item">
                            {{ project.languages }} <br>
                            <a v-if="project.link" v-bind:href="project.link">{{ project.link }}</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-wrap justify-content-between content-item" id="gallery" data-toggle="modal" data-target="#exampleModal">
                            <img
                                class="project-gallery-image col-sm-6 col-md-12 col-lg-6"
                                v-for="(image, index) in JSON.parse(project.images)" 
                                :key="index"
                                v-bind:src="'/images/' + image"
                                data-target="#carouselExample"
                                :data-slide-to="index"
                            />
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-md-8">
                <div class="content-item">
                    <p class="h1">
                        {{ project.title }}
                    </p>
                    <p class="lead">
                        {{ project.description }}
                    </p>
                    <hr>
                    <p>
                        {{ project.detail_description }}
                    </p>
                </div>
            </div>
       </div>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="h-100 m-auto modal-dialog-centered modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div 
                                    class="carousel-item"
                                    v-for="(image, index) in JSON.parse(project.images)" 
                                    :key="index"
                                    :class="{ 'active': index === 0 }"
                                >
                                    <img class="d-block carousel-item-image" v-bind:src="'/images/' + image">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            project: {}
        }
    },
    created() {
        if(!this.$attrs.project) {
            this.$router.push({ name: 'projects'})
        } else {
            this.project = this.$attrs.project
        }
    }
}
</script>
<style lang="scss" scoped>
    .project {
        &-gallery {
            &-image {
                height: 100px;
                object-fit: cover;
                margin-bottom: 15px;
                background-position: center;
                background-size: cover;
                cursor: pointer;
            }
        }
    }
    .carousel {
        &-item {
            height: 60vh;
            &-image {
                max-width: 100%;
                max-height: 100%;
                width: auto;
                margin: auto;
            }
        }
    }

    .modal {
        &-header, &-footer {
            border: none;
        }
        &-content {
            background-color: #1E1E1E;
        }
    }
    @media only screen and (min-width: 992px) {
        .content-margin {
            margin-top: 60px;
        }
    }
</style>