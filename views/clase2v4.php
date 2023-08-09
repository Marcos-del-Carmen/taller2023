<div class="v2">
  <?php
    $lado="";
    $area=""; 
    $rbOperacion="";
    
    if(isset($_POST["btnCalcularJQuery"]) && isset($_POST["rbOperacion"])) {
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
  <div class="cont-c2">  
    <div class="cont-entrada-figuras ">	
      <form action="index.php#clase2" method="POST">
        Lado: <input type="text" name="tfLado" size="10" maxlength="10" id="txtEntrada" value=<?php echo $lado?>><br>
          <?php		
              if($rbOperacion=="Cuadrado") {
                echo "
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbCuadrado\"  checked>Cuadrado <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbPentagono\"        >Pentagono<br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHexagono\"         >Hexagono <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHeptagono\"        >Heptagono<br>";
              } else if($rbOperacion=="Pentagono") {
                  echo "
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbCuadrado\"          >Cuadrado <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbPentagono\"  checked>Pentagono<br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHexagono\"          >Hexagono <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHeptagono\"         >Heptagono<br>";            	
              } else if($rbOperacion=="Hexagono") {
                  echo "
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbCuadrado\"         >Cuadrado <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbPentagono\"        >Pentagono<br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHexagono\"  checked>Hexagono <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHeptagono\"        >Heptagono<br>";            	
              } else if($rbOperacion=="Heptagono") {
                  echo "
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbCuadrado\"         >Cuadrado <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbPentagono\"        >Pentagono<br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHexagono\"         >Hexagono <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHeptagono\" checked>Heptagono<br>";      
                } else {
                  echo "
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbCuadrado\"  checked>Cuadrado <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbPentagono\"        >Pentagono<br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHexagono\"         >Hexagono <br>
                  <input type=\"radio\" name=\"rbOperacion\" id=\"rbHeptagono\"        >Heptagono<br>";            	
              } 
          ?>  
      <input type="submit" name="btnCalcularJQuery" value="Calcular"><br><br>
        Area: <input type="text"   name="tfAreaJQuery" size="10" maxlength="10" value=<?php echo $area ?>>
      </form>
    </div>
    <div id="cont-rest" class="cont-figuras ">
    </div>
    <p>
      En este ejemplo se hizo funcionar con jQuery para que tener actulizar las figuras de manera mas interactiva esto tambien lo podemos hacer con eventos de javaScript. <br>
      <span>En los siguientes botones te podemos dar una vista del codigo ya que visualmene no hay mucha diferencia </span>
    </p>
    <button id="btn-modal" onclick="openModal()">jQuery</button>
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
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque molestiae a quae ipsa cum veniam aliquid, deleniti quidem officiis architecto! Perspiciatis, fugit inventore perferendis error accusantium ipsam cum consectetur. Necessitatibus?
          Maxime, laudantium deleniti. Ratione voluptates excepturi, numquam explicabo magnam accusantium vel dolor laborum vero sed nesciunt consequatur quam quis recusandae eius. Voluptas illo soluta quam temporibus sequi tempora autem molestias!
        </p>
      </div>
    </div>
    <button id="btn-modal" onclick="openModal()">JavaScript</button>
    <div id="cont-modal" class="cont-modal">
      <div class="modal-body">
        <button id="btn-close-modal" onclick="closeModa()" > X </button>
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
      </div>
    </div>
  </div>
</div>