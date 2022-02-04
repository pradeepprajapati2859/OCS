
function onclickmenu() {
    document.getElementById("hambergermenu").classList.toggle("icon")
    document.getElementById("nav-list").classList.toggle("change")
}
$("button").click(function () {
    $(".hambergermenu").toggleClass("icon");
    $(".nav-list").toggleClass("change");
});