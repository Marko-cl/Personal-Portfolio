function toggleModes() {
let icon = document.getElementById("toggle");
let nav = document.getElementById("nav");
let parent = document.getElementById("skillsdiv");
let children = parent.querySelectorAll("div");
let centermain=document.getElementById("center-main");
let container4=document.getElementById("container4");
let info2=document.getElementById("info2");
let modes=document.getElementById("modes");
let sec23=document.getElementById("sec23");
let name=document.getElementById("Name")
let links = document.querySelectorAll(".nav_links li a");


if (icon.src.includes("moon.png")) {
icon.src = "pics/sun.png";
nav.style.background = "rgba(255, 255, 255, 0.5)";
name.style.color="black"
links.forEach((link, index) => {
    if (index !== 0) {
        link.style.color = "black";
    }
});
document.body.style.color = "black";
    
centermain.style.background="rgba(255, 255, 255,0.9)";
sec23.style.backgroundImage="radial-gradient(rgb(97, 97, 97), rgb(228, 228, 228), white)"
children.forEach(div => {
div.style.backgroundColor = "rgba(255, 255, 255, 0.7)"
})
container4.style.background="white";
info2.style.borderLeft="solid 1px black";
info2.style.borderRight="solid 1px black";
modes.style.borderColor="black";

} else {
icon.src = "pics/moon.png";
nav.style.background = "rgba(0, 0, 0, 0.5)";
document.body.style.color = "white";
centermain.style.background=" rgba(0, 0, 0,0.9)";
sec23.style.backgroundImage="radial-gradient(rgb(48, 48, 48), rgb(27, 27, 27), black)"
name.style.color="white"
links.forEach((link, index) => {
    if (index !== 0) {
        link.style.color = "white";
    }
});

children.forEach(div => {
div.style.backgroundColor = "rgba(0, 0, 0, 0.7)";
});

container4.style.background="black";
info2.style.borderLeft="solid 1px white";
info2.style.borderRight="solid 1px white";
modes.style.borderColor="white";
}



}
