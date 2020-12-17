@extends('layouts.main')

@section('content')
    <div class="uk-child-width-expand@s">
        <a style="  text-decoration: none;" href="mailto:rickschijvenaars@gmail.com">
            <div class="uk-card uk-card-default uk-card-hover btn-fixed">
                <div class="uk-card-body btn-cta" >
                    <span class="uk-text-meta uk-margin-remove-top">Want to know more?</span>
                    <h3 class="uk-card-title uk-button-text uk-margin-remove-bottom uk-margin-remove-top">JUST ASK! <span uk-icon="icon: comment"></span></h3>
                </div>
            </div>
        </a>
        <div class="uk-card uk-card-default uk-card-body m-auto uk-width-5-6@m animated slideInDown">
            <div uk-grid>

                <div class="uk-width-1-2@m">
                    <h1 class="uk-article-title">HEYA THERE!</h1>

                    <p class="uk-text-lead">
                        My name is Rick and this website is about me!
                    </p>

                    <p>Currently I am {{$age}} years old, living and studying in Rotterdam. I am studying CMGT <span class="uk-article-meta">(which stands for Creative Media & Game Technologies)</span> at Rotterdam University of Applied Science. The study offers various subjects like Internet of Things and Artificial Intelligence, but most importantly web development. At the study I do a lot of projects. At these projects I often only get a problem, a subject or a context of the assignment and some requirements the final product needs to meet. Everything in between is up to me or my team. I need to do my own research, pick the target audience, brainstorm, design the product, make a prototype, test the prototype/product and of course develop them.</p>

                    <p>Before I started studying I finished VWO at high school. The most interesting and fun class I took there was computer science. I had to create my own website with HTML, CSS and a bit of Php. <br>
                        I really loved to do it and to see how I created something with code which became a real website. That is the reason why I chose studying it.</p>

                    <p>I am in my second year of school and I have learned a lot already. After two years of various projects and tasks I have learned about everything that has to do with making innovative digital products, from the early beginning of the process to the end. I have gained experience in several languages and frameworks, such as HTML, CSS, Php, JavaScript, TypeScript, JSON, Vue.js, Laravel and Bootstrap. The user is very important to me and I always try to make a product which fills the true wishes and needs of the end-user. </p>

                    <p>Some of my personality traits are being social and calm, which are good qualities while working independently as well as in a team. I like sharing my knowledge and to learn from others. Building beautiful digital products is my passion.</p>

                    <p>In my spare time I fitness and visit/work at parties and festivals. You can find me in the gym or at a party quite often.</p>

                    <p>Well this was a tiny bit of information about me. If you want to see some of what I have done or you want to find out more about me, please click one of the buttons below! </p>

                    <button class="uk-button uk-button-default uk-width-1-2@s uk-width-1-3@l p-1 m-2" onclick="window.location.href='{{route('projects')}}'"> PORTFOLIO <span uk-icon="icon: folder"></span></button>
                    <button class="uk-button uk-button-default uk-width-1-2@s uk-width-1-3@l p-1 m-2" onclick="window.location.href='{{route('contact')}}'"> CONTACT <span uk-icon="icon: mail"> </span></button>
                </div>
                <div class="uk-width-1-2@m">

                    <div style="min-height:300px;" class="text-center uk-inline w-100 h-50">
                        <img class="uk-border-pill uk-position-center" src="{{asset('images/hoofd.png')}}" style="border:2px solid black;width:200px!important;" width="200" height="200" alt="IMG">
                    </div>

                    <hr class="uk-divider-icon">

                    <div class="text-center uk- w-100">
                        <h2>Experience with:</h2>
                        HTML - CSS<br>
                        JavaScript - TypeScript<br>
                        Php - MySQL - JSON<br>
                        Vue.js - Laravel<br>
                        Bootstrap - UIkit

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection