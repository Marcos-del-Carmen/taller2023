<?php
    header('Content-type: text/html; charset=UTF-8');
    $matricula = $_GET['matricula'];
    if($matricula=="") {
        echo "";
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'db_taller2023');
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
?>