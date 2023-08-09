<h2>Tipos de texto con php</h2>
<p>
    Mostrar un mensaje del lado del servidor no es de mucha ayuda ya que lo usamos para probar el codigo o mandar variables lo que quiero decir es que estos textos los usamos ya sea con el servidor o con el cliente.
    <br>
    <b>Notas</b>
    <br>
    <p class="nota">
        <b><i>Cuando es puro texto</i></b>, se pueden utilizar comillas simples. <br />
    </p>
    <p class="nota">
    <i><b>Cuando utilizo texto y variables</b> dentro de una cadena texto</i>, debo usar comillas dobles.
    </p>
</p>
<div class="cont-ejemplo">
    <h3>Ejemplo de como utilizar comillas simples y dobles</h3>

    <?php 
        $nombre   ="Panfilo";       
        $apellidos="Pérez García";
        $edad     =38;            
        $capital  ="chilpancingo";
        $chilpancingo=300000;     
        ?>
    <p class="fondo-codigo">
        <span class="keyword">echo</span> <span class="string"> 'Esta es solo una caneda de texto'</span> <br>
        <span class="variable">$nombre</span> = <span class="string">"<?php echo $nombre; ?>"</span><br>
        <span class="variable">$apellidos</span> = <span class="string">"<?php echo $apellidos; ?>"</span><br>
        <span class="variable">$edad</span> = <span class="number"><?php echo $edad; ?></span><br>
        <span class="variable">$capital</span> = <span class="string">"<?php echo $capital; ?>"</span><br>
        <span class="variable">$chilpancingo</span> = <span class="number"><?php echo $chilpancingo; ?></span><br>
    </p>
    <h3>MOSTRANDO VARIABLES</h3>  
    <p class="fondo-codigo">
    <span class="keyword">echo</span> <span class="string">"<span class="variable">$nombre</span> <span class="variable">$apellidos</span> <span class="variable">$edad</span>"</span>;<br>
    <span class="keyword">echo</span> <span class="string">"{<span class="variable">$nombre</span> } {<span class="variable">$apellidos</span>} {<span class="variable">$edad</span>}"</span>;<br>
    <span class="keyword">echo</span> <span class="string">"<span class="variable">$nombre</span> {<span class="variable">$apellidos</span>} <span class="variable">$edad</span>"</span>;<br>
    <span class="keyword">echo</span> <span class="string">"<span class="variable">$nombre</span>, <span class="variable">$apellidos</span> ,<span class="variable">$edad</span> "</span>;<br>
    <span class="keyword">echo</span> <span class="string">"<span class="variable">$nombre</span>, <span class="variable">$apellidos</span> ,<span class="variable">$edad</span> "</span>;<br>
    <span class="keyword">echo</span> <span class="string">' <span class="variable">$nombre</span> ,'</span> <span class="string">'<span class="variable">$apellidos</span> ,'</span> <span class="string">' <span class="variable">$edad</span>,'</span>;<br>
    <span class="keyword">echo</span> <span class="string">'<span class="variable">$nombre</span> .'</span> <span class="string">'. <span class="variable">$apellidos</span> .'</span> <span class="string">'. <span class="variable">$edad</span>.';"</span>;<br>
    <span class="keyword">echo</span> <span class="string">"Capital de Guerrero: <span class="variable">$capital</span>, poblacion: ${<span class="variable">$capital</span>} "</span>;<br>
    <span class="keyword">echo</span> <span class="string">"Capital de Guerrero: <span class="variable">$capital</span>, poblacion: ${'<span class="variable">$chilpancingo</span>'} "</span>;<br>
    </p>
    <h3>Uso de html con incrustraciones php</h3>
    <table class="tabla-codigo" width="1000">
        <tr>
            <th>Codigo</th>
            <th>Resultado</th>
        </tr>	
        <tr>
            <td><?php echo 'echo "$nombre $apellidos $edad";' ?></td>
            <td><?php echo "$nombre $apellidos $edad " ?></td>
        </tr>	
        <tr>
            <td><?php echo 'echo "{$nombre} {$apellidos} {$edad}";' ?></td>
            <td><?php echo "{$nombre} {$apellidos} {$edad} "; ?></td>
        </tr>						
        <tr>
            <td><?php echo 'echo "$nombre {$apellidos} $edad";' ?></td>
            <td><?php echo "$nombre {$apellidos} $edad" ?></td>
        </tr>
        <tr>
            <td><?php echo 'echo "$nombre, $apellidos, $edad";' ?></td>
            <td><?php echo "$nombre, $apellidos, $edad" ?></td>
        </tr>	
        <tr>
            <td><?php echo 'echo $nombre, $apellidos, $edad";' ?></td>
            <td><?php echo " $nombre, $apellidos, $edad," ?></td>			
        </tr>
        <tr>
            <td><?php echo 'echo $nombre,\' \',$apellidos,\' \',$edad;' ?></td>
            <td><?php echo $nombre,' ',$apellidos,' ',$edad ?></td>			
        </tr>		
        <tr>
            <td><?php echo 'echo $nombre.\' \'.$apellidos.\' \'.$edad\';' ?></td>
            <td><?php echo $nombre.' '.$apellidos.' '.$edad ?></td>			
        </tr>				
        <tr>
            <td><?php echo 'echo "Capital de Guerrero: $capital, poblacion: ${$capital}";' ?></td>
            <td><?php echo "Capital de Guerrero: $capital, poblacion: ${$capital}" ?></td>			
        </tr>		
        <tr>
            <td><?php echo 'echo "Capital de Guerrero: $capital, poblacion: ${\'chilpancingo\'}";' ?></td>
            <td><?php echo "Capital de Guerrero: $capital, poblacion: ${'chilpancingo'}" ?></td>			
        </tr>
    </table>
</div>