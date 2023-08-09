$(document).ready(function() {
    $("#rbCuadrado").click(function () {
        document.getElementById("cont-rest").innerHTML = "<img src=\"public/img/cuadrado.png\">";        
        console.log("El cuadrado");
    });

    $("#rbPentagono").click(function () {
        document.getElementById("cont-rest").innerHTML = "<img src=\"public/img/pentagono.png\">";
        console.log("El pentagono");
    });

    $("#rbHexagono").click(function () {
        document.getElementById("cont-rest").innerHTML = "<img src=\"public/img/hexagono.png\">";
        console.log("El hexagono");
    });

    $("#rbHeptagono").click(function () {
        document.getElementById("cont-rest").innerHTML = "<img src=\"public/img/heptagono.png\">";
        console.log("El heptagono");
    });
});