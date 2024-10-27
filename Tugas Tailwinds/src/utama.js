window.addEventListener("resize", function() {
    const menu = document.getElementById("burger");
    if (window.innerWidth >= 640) {
        menu.classList.remove("hidden");
        menu.classList.remove("flex-col");
        menu.classList.add("flex-row");
    } else {
        menu.classList.remove("flex-row");
       
        menu.classList.add("hidden");
    }
});
function burger() {
    const menu = document.getElementById("burger");
    menu.classList.toggle("hidden");
    menu.classList.toggle("flex-col");
}