<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentacion del taller</title>
    <?php require('views/components/estilos.html'); ?>
</head>
<body onload="cargarAlumnos()">
    <?php require('views/components/menu.html'); ?>
    <div class="cont-pre" id="inicio">
        <div class="container">
            <h2>Taller 2023</h2>
            <h2>Taller 2023</h2>
            <h2>Taller 2023</h2>
            <h2>Taller 2023</h2>
        </div>
    </div>
    <div class="contenido">
        <div class="cont-clase" id="clase1">
            <?php include('views/clase1.php')?>
        </div>
        <div class="cont-clase" id="clase2">    
            <?php include('views/clase2.php');?>
            <?php include('views/clase2v4.php');?>
        </div>
        <div class="cont-clase" id="clase3">
            
            <h3>XMLHttpRequest</h3>    
            <div class="cont-ejecucion">

                    <form>
                        <select name="cmbAlumnos" onchange="buscarAlumno(this.value)">
                            <option value="" selected >- selecciona -</option>
                            <option value="001">Marcos</option>
                            <option value="002">Saul</option>
                            <option value="003">Francisco</option>
                            <option value="004">Panfilo</option>
                            <option value="005">Brenda</option>
                        </select>
                    </form>

                <div id="result1">Primer resultado</div>
            </div>
            
            <div class="cont-ejemplo">
                <p>
                    En este ejemplo selecionamos un alumno apartir de un compo y de ese compo mostramos el alumno que esta en la base de datos.
                </p>
            </div>
        </div>
        <div class="cont-clase" id="clase4">
            <div class="cont-ejecucion">

                <form>
                    <select id="cmbAlumnos" onchange="buscarAlumno(this.value);"></select>
                </form>
                
                <div id="resultado">Aqui van los resultados</div>    
                <div id="contendor">
                    <div id="panel_1"></div>
                    <div id="panel_2"></div>
                </div>
            </div>
            <div class="cont-ejemplo">
                <p>
                    En este ejemplo tenemos un objeto llamado XMLHttpRequest en el cual mandamos a llamar a archivos php para incluirlos a via "GET". Digamos que indicamos en donde se va mostrar el resultado y de que archivo va procesar la informacion. 
                    <br>
                    Dependendio lo que haya seleccionado el usuario muestra una tabla con los atributos del alumno que este en la base de datos.
                </p>
            </div>          
        </div>
        <div class="cont-clase" id="clase5">
            <h3 id="titulo1">¿que eres?</h3>
            <h3 id="titulo2">¿que eres?</h3>
        </div>
    </div>

    <?php require('views/components/scripts.html');?>
</body>
</html>