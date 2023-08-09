function buscarAlumno(matricula) 
{
    xmlhttp = new XMLHttpRequest();    
    xmlhttp.onreadystatechange = function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status === 200) 
        {
            document.getElementById("resultado").innerHTML = xmlhttp.responseText;
        } 
    };
    xmlhttp.open("GET",`alumnos.php?opcion=mostrar&matricula=${matricula}`,true); // esto me va servir para la tercera version
    xmlhttp.send();
}

function cargarAlumnos() {
    xmlhttp = new XMLHttpRequest();    
    xmlhttp.onreadystatechange = function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status === 200) 
        {
            document.getElementById("cmbAlumnos").innerHTML = xmlhttp.responseText;
        } 
    };    
    xmlhttp.open('GET', 'alumnos.php?opcion=cargar', true);
    xmlhttp.send();
}