<div class="v1">
    <h2>Tipos de procesamiento</h2>
    <p>Las peticiones que realizamos las hacemos mediante el formulario en el cual nos pasamos al servidor. </p>
    <p> 
        <b>php:</b> dependido de la situacion habra ocaciones en las cuales la página se recarge y otras en las que no necesitemos que la página se recarge y solo se este recargadando una sección.
    </p><br>
    <p> 
        <b>jQuery: </b> esta es una buena solucion para recargar solo una sección o varias de tu página web y no tener que estar saturando el servidor de peticiones. 
    </p><br>
    <div class="cont-c2">
        <?php
            $lado="";
            $area=""; 
            $rbOperacion="";
            
            if(isset($_POST["btnCalcular"]) && isset($_POST["rbOperacion"])) {
                $lado=$_POST["tfLado"];
                $rbOperacion=$_POST["rbOperacion"];
                if ($rbOperacion=="Cuadrado")
                    $area=$lado*$lado;
                else if ($rbOperacion=="Pentagono")
                    $area=$lado*5*$lado/2/tan(36*3.1416/180.0)/2;
                else if ($rbOperacion=="Hexagono")
                    $area=$lado*6*$lado/2/tan(30*3.1416/180.0)/2;
                else if ($rbOperacion=="Heptagono")
                    $area=$lado*7*$lado/2/tan(25.714*3.1416/180.0)/2;
            }
        ?>
        <div class="cont-entrada-figuras">	
            <form action="index.php#clase2" method="POST">
                Lado: <input type="text" name="tfLado" size="10" maxlength="10" value=<?php echo $lado?>><br>
                <?php		
                    if($rbOperacion=="Cuadrado") {    
                        echo "
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Cuadrado\"  checked>Cuadrado <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Pentagono\"        >Pentagono<br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Hexagono\"         >Hexagono <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Heptagono\"        >Heptagono<br>";
                    } else if($rbOperacion=="Pentagono") {
                        echo "
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Cuadrado\"          >Cuadrado <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Pentagono\"  checked>Pentagono<br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Hexagono\"          >Hexagono <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Heptagono\"         >Heptagono<br>";            	
                    } else if($rbOperacion=="Hexagono") {
                        echo "
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Cuadrado\"         >Cuadrado <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Pentagono\"        >Pentagono<br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Hexagono\"  checked>Hexagono <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Heptagono\"        >Heptagono<br>";            	
                    } else if($rbOperacion=="Heptagono") {
                        echo "
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Cuadrado\"         >Cuadrado <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Pentagono\"        >Pentagono<br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Hexagono\"         >Hexagono <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Heptagono\" checked>Heptagono<br>";      
                    } else {
                        echo "
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Cuadrado\"  checked>Cuadrado <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Pentagono\"        >Pentagono<br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Hexagono\"         >Hexagono <br>
                        <input type=\"radio\" name=\"rbOperacion\" value=\"Heptagono\"        >Heptagono<br>";            	
                    } 
                ?>  
                <input type="submit" name="btnCalcular" value="Calcular"><br><br>
                Area: <input type="text"   name="tfArea" size="10" maxlength="10" value=<?php echo $area ?>>
            </form>
        </div>
        <div class="cont-figuras">
            
            <?php
            if($rbOperacion=="Cuadrado")		
                echo '<img src="public/img/cuadrado.png">';
            else if($rbOperacion=="Pentagono")
                echo '<img src="public/img/pentagono.png">';
            else if($rbOperacion=="Hexagono")
                echo '<img src="public/img/hexagono.png">';
            else if($rbOperacion=="Heptagono")
                echo '<img src="public/img/heptagono.png">';		
            else 
                echo '<img src="public/img/cuadrado.png">'; 
            ?>
        </div>
        <p>
            El boton calcular lo procesamos a archivo php en el cual nos proporciona el resultado llegando a recargar la página aun que en la clase se propuso a que sea mas dinamico que en el momento que selecciones un boton de radio se cambie de figura.
        </p>
        <button id="btn-modal" onclick="openModal()">php</button>
        <div id="cont-modal" class="cont-modal">
            <div class="modal-body">
                <button id="btn-close-modal" onclick="closeModal()" > X </button>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio fugit adipisci quas? Odio reprehenderit distinctio minus vitae libero hic rem ipsam molestias delectus, similique quisquam. Iusto qui veniam maiores quisquam.
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque molestiae a quae ipsa cum veniam aliquid, deleniti quidem officiis architecto! Perspiciatis, fugit inventore perferendis error accusantium ipsam cum consectetur. Necessitatibus?
                Maxime, laudantium deleniti. Ratione voluptates excepturi, numquam explicabo magnam accusantium vel dolor laborum vero sed nesciunt consequatur quam quis recusandae eius. Voluptas illo soluta quam temporibus sequi tempora autem molestias!
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque molestiae a quae ipsa cum veniam aliquid, deleniti quidem officiis architecto! Perspiciatis, fugit inventore perferendis error accusantium ipsam cum consectetur. Necessitatibus?
                Maxime, laudantium deleniti. Ratione voluptates excepturi, numquam explicabo magnam accusantium vel dolor laborum vero sed nesciunt consequatur quam quis recusandae eius. Voluptas illo soluta quam temporibus sequi tempora autem molestias!
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque molestiae a quae ipsa cum veniam aliquid, deleniti quidem officiis architecto! Perspiciatis, fugit inventore perferendis error accusantium ipsam cum consectetur. Necessitatibus?
                Maxime, laudantium deleniti. Ratione voluptates excepturi, numquam explicabo magnam accusantium vel dolor laborum vero sed nesciunt consequatur quam quis recusandae eius. Voluptas illo soluta quam temporibus sequi tempora autem molestias!
                </p>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque molestiae a quae ipsa cum veniam aliquid, deleniti quidem officiis architecto! Perspiciatis, fugit inventore perferendis error accusantium ipsam cum consectetur. Necessitatibus?
                Maxime, laudantium deleniti. Ratione voluptates excepturi, numquam explicabo magnam accusantium vel dolor laborum vero sed nesciunt consequatur quam quis recusandae eius. Voluptas illo soluta quam temporibus sequi tempora autem molestias!
                </p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet pariatur voluptatum, molestiae delectus voluptates nobis iure incidunt magnam voluptatibus veritatis dignissimos in? In dolorum voluptas, modi nihil cumque asperiores consectetur?</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque temporibus animi earum? Deleniti perferendis architecto totam voluptate. Expedita quod esse quaerat neque veritatis cumque perspiciatis rem perferendis voluptates nam.
                </p>
            </div>
        </div>
    </div>
</div>