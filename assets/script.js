/*eslint-env browser*/
window.onscroll = function () {
    scrollFunction()
};
var nav = document.getElementById("header");

function scrollFunction() {
    if (window.scrollY > 0) {
        nav.style.height = "50px";
        nav.style.backgroundColor = "rgba(51, 51, 51, 0.7)";
        nav.style.borderBottom = "1px solid black";

    } else {
        nav.style.height = "60px";
        nav.style.backgroundColor = "rgba(51, 51, 51, 0.9)";
        nav.style.borderBottom = "none";
    }
}
