//Moving arrow at navbar
let nav = document.getElementById('mainnav');
let arrow = document.getElementById('arrow');

nav.addEventListener("mouseenter", () => {
    arrow.style.display = "none";
});
nav.addEventListener("mouseleave", () => {
    arrow.style.display = "block";
});

//Random styling projects
let projects = document.getElementsByClassName('flip-card');

for (let i = 0; i < projects.length; i++) {
    console.log("Test");
    projects[i].style.animationDelay = `${i + 1}s`;
    projects[i].style.height = `${Math.floor(Math.floor(Math.random() * 120) + 200)}px`;
}