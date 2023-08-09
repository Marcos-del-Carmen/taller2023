<?php
    header('Content-type: text/html; charset=UTF-8');

    $opcion = $_GET['opcion'];

    switch($opcion) {
        case 'mostrar': 
            mostrar();
            break;
        case 'cargar':
            cargar();
            break; 
    }

    function mostrar() {
        $matricula = $_GET['matricula'];

        if($matricula=="") {
            echo "{$matricula}";
        } else {
            $con = mysqli_connect('127.0.0.1', 'root', '', 'db_taller2023');
            if(!$con){
                die("Conexión fallida a la BD: mysqli_errno($con)");
            }
            
            $sql = "SELECT * FROM alumnos WHERE Matricula = '$matricula'";
            $resultado = mysqli_query($con, $sql);
    
            echo " 
                <table>
                    <tr>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>
                        <th>Edad</th>
                    </tr>
            ";
    
            while($row = mysqli_fetch_array($resultado)) {
                echo "
                    <tr>
                        <td>{$row["Matricula"]}</td>
                        <td>{$row["Nombre"]}</td>
                        <td>{$row["Paterno"]}</td>
                        <td>{$row["Materno"]}</td>
                        <td>{$row["Edad"]}</td>
                    </tr>
                ";
            }
            echo "</table>";
            mysqli_close($con);
        }
    }
    
    function cargar() {
        echo "Esta funcionando la funcion para seleccionar un alumno desde la base de datos";
        header('Content-type: text/html; charset=UTF-8');
        $con = mysqli_connect('127.0.0.1', 'root', '', 'db_taller2023');

        if(!$con) {
            die('Conexion fallida');
        }

        $sql='SELECT * FROM alumnos';
        $result = mysqli_query($con, $sql);

        echo "<option value=\"\"> - Selccione un alumno - </option>";
        while($row = mysqli_fetch_array($result)) {
            $nc = "{$row['Nombre']} {$row['Paterno']} {$row['Materno']}" ;
            echo "<option value=\"{$row['Matricula']}\"> $nc </option>";
        }
        mysqli_close($con);
    }
?>