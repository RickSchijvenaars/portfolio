<template>
    <div class="container">
        <span class="d-none d-lg-flex about-title text-white monofont"> 
            About me.
        </span>
        <div class="row content-margin">
            <div class="col-md-8">
                <div class="content-item">
                    <p class="h1 title d-inline monofont">
                    </p>
                    <p class="lead">
                        My name is Rick and this website is about me.
                    </p>
                    <p>
                        Currently I am {{age}} years old, living and studying in Rotterdam. I am studying CMGT (Creative Media & Game Technologies) at Rotterdam University of Applied Science. Before I started studying I finished VWO at high school. The most interesting and fun class I took there was computer science. I had to create my own website with HTML, CSS and a bit of Php. <br>
                        I really loved to do it and to see how I created something with code which became a real, useable website. That is the reason why I chose studying it.<br>
                        <br>
                        Some of my personality traits are being social and calm, which are good qualities while working independently as well as in a team. I like sharing my knowledge and to learn from others. Building beautiful digital products is my passion.<br>
                        <br>
                        In my spare time I like to go to the gym, visit/work at parties and festivals or game with friends.<br>
                        <br>
                        <i>Study</i><br>
                        CMGT is based on the method <i>learning by doing</i>, which results in continuously running individual and group projects. These projects vary in subject and techniques and are based on real problems or situations and sometimes on behalf of real clients. Often the description of such project is only a problem or a subject and some requirements the final product needs to meet. <br>
                        Actually everything is up to me or my team; doing research to find the real problem, picking the target audience, brainstorming, designing, prototyping, testing and of course developing the product. <br>
                        <br>
                        Because I learned how to go through this whole process every time, I am not just a regular developer. Besides developing, I also have experience with target audiences, brainstorming and designing. At CMGT they call me a '<i>Creative Developer</i>'. <br>
                        <br>
                        <i>Internship</i><br>
                        The first half of the third year of my study I did an internship. In the years before I experienced that I really liked the front-end part of digitial products. I liked the things I could create with CSS and JavaScript and I experimented some with Vue.js. <br>
                        I chose to focus myself more on front-end during this internship and I did a front-end internship at 23G in Rotterdam. Here I worked on various projects, mostly HTML/SASS/Vue.js, and learned a lot from their workflow.<br>
                        <br>
                        <i>Now</i><br>
                        Currently I am in the last year of my study. The first half of this year exists of doing a minor. Here I chose to expand my knowledge and to get to know more about a completely different discipline; Dance Industry. <br>
                        The choice to do this minor is based on one of my biggest hobbies; festivals. I love festivals, the ambiance at parties, people and techno music. Before the coronapandemic you could find me there every weekend.<br>
                        So.. I started with this minor exactly in the coronapandemic, when there were no more parties allowed.. This was not what I chose this minor for, but my developing skills and knowledge came in handy here, because we had to organize an event online now. For this project I created a website where the event took place, people were sent logincodes and on the website they could find a livestream, timetable, activities at certain times and videocalls with other visitors.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12">
                        <div class="content-item">
                             <img class="img-fluid profile-picture" src="/images/me.jpg"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="content-item text-center">
                            <h2>Experience with:</h2>
                            <ul class="list-unstyled">
                                <li>HTML</li>
                                <li>CSS / SASS</li>
                                <li>JavaScript</li>
                                <li>TypeScript</li>
                                <li>Php</li>
                                <li>MySQL</li>
                                <li>JSON</li>
                                <li>Axios</li>
                                <li>Bootstrap</li>
                                <li>UIkit</li>
                                <li>Vue.js</li>
                                <li>Laravel</li>
                                <li>Visual Studio Code</li>
                                <li>PhpStorm</li>
                                <li>Android Studio</li>
                                <li>Arduino</li>
                                <li>Github</li>
                                <li>Adobe Photoshop</li>
                                <li>Adobe Premiere Pro</li>
                                <li>Adobe After Effects</li>
                                <li>Adobe XD</li>
                            </ul>
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
        }
    },
    computed: {
        age() {
            const today = new Date()
            const birth = new Date(1999, 9, 27)
            return today.getFullYear() - birth.getFullYear()
        }
    },
    methods: {
        typeMessage(){
            new Typed(".title", {
                strings: [
                    "HEY THERE!", 
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

<style lang="scss" scoped>
.profile {
    &-picture {
        border: 2px solid black;
    }
}

.about-title {
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