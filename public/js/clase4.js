function buscarAlumnos(matricula) 
{
    xmlhttp = new XMLHttpRequest();    
    xmlhttp.onreadystatechange = function() 
    {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) 
        {
            document.getElementById("result2").innerHTML = xmlhttp.responseText;
        } 
    };
    xmlhttp.open("GET",`views/clase4.php?opcion=mostrar&matricula=${matricula}`, true); // esto me va servir para la tercera version
    xmlhttp.send();
}

function cargarAlumnoss() {
    xmlhttp = new XMLHttpRequest();    
    xmlhttp.onreadystatechange = function() 
    {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200) 
        {
            document.getElementById("cmbAlumnos1").innerHTML = xmlhttp.responseText;
        } 
    };    
    xmlhttp.open('GET', 'views/clase4.php?opcion=cargar', true);
    xmlhttp.send();
}