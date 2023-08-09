$(document).ready(function() {
    // Manipulación del DOM
  
    // Cambiar el texto del elemento h1 cuando se preciona el texto de "titulo 1"
    // formas de mandar a traer un evento 1
    $("#titulo1").click(function () {
        document.getElementById("titulo1").innerHTML = "¡Programador!";
        console.log("Cambiaste el titulo");
    });

    // modifica el contenido de titulo h1, cambiando en texto de html por el cual le 
    // $("h1#titulo1").html("Hola programadores");

    $("h3#titulo1").css({
        "color": "red",
        "font-size": "24px"
    });      

    // formas de mandar a traer un evento 2 
    $("#titulo2").on("click", function(){
            document.getElementById("titulo2").innerHTML = "¡Diseñador!";
    })
});
  