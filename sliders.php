<?php
    $allPetitesAnnonces = $daoInstance->getPetitesAnnonces();

    $descriptifAnnonce  = 'Description sommaire de la petite annonce' ;
    $designEtPrixAnnonce  = 'relatant nom du matériel prix' ;
    $quantitEtEtat  = 'quantité (nombre) et Etat.' ;
?>

<script>
    function updateDescriptor(idDiv, descriptifAnnonce, designEtPrixAnnonce, quantitEtEtat) {
      setInterval(function(){  
        if(descriptifAnnonce.length >= 32){
          descriptifAnnonce = descriptifAnnonce.substring(0,32)+'...'  ;
        }
        if( document.getElementById(idDiv).className.split(" ").indexOf('active')!=-1 ){
            document.getElementById("descriptptteannonce").innerHTML = descriptifAnnonce +'<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ designEtPrixAnnonce+'  <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '+quantitEtEtat+' </p>';
        }
      }, 1000);
    }
</script>


 <!-- slider start -->
<div class="row slideperso">

    <div id="myCarousel" class="carousel slide w3-content w3-display-container col-sm-10 col-md-10 col-xs-12" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <a href="#"><img class="carouselImg" src="./index_files/1(1).jpg" alt="Los Angeles"></a>
        </div>

        <div class="item">
          <a href="#"><img class="carouselImg" src="./index_files/img2.jpg" alt="Chicago"></a>
        </div>

        <div class="item">
          <a href="#"><img class="carouselImg" src="./index_files/img3.jpg" alt="New York"></a>
        </div>


      </div>

      <!-- Left and right controls -->
      <a class="w3-button w3-black w3-display-left" href="#myCarousel" data-slide="prev">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </a>
      <a class="w3-button w3-black w3-display-right" href="#myCarousel" data-slide="next">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </a>

    </div>

    <img src="./index_files/surlefil.png" alt="Sur le fil" id="ptteannonce">
    <p id="descriptptteannonce"> <?php echo $descriptifAnnonce ?> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $designEtPrixAnnonce ?> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $quantitEtEtat ?> </p>

    <div id="mySecondCarousel" class="carousel slide w3-content1 col-sm-2 col-md-2 col-xs-12 mySecondCarousel" data-ride="carousel">
       <!-- Wrapper for slides -->
      <div class="carousel-inner">

      <?php 

          $i = 0 ;
          foreach ($allPetitesAnnonces as $petiteAnnonce) {
              $descriptifAnnonce  = '"'.$petiteAnnonce["description"].'"' ;
              $designEtPrixAnnonce  =  '"'.$petiteAnnonce["designation"].' à '.strval($petiteAnnonce["prix"]).'"';
              $quantitEtEtat  =  '"Stock : '.strval($petiteAnnonce["stock"]).' Etat NEUF!"';

              if ($i == 0)
                echo '<div class="item active" id="'.$petiteAnnonce["id"].'"><a href="#"><img src="http://localhost/EsquisseBackEnd/server-backend-upload/uploads/'.$petiteAnnonce["img_link"].'" alt="'.$petiteAnnonce["designation"].'"></a> <script>updateDescriptor("'.$petiteAnnonce["id"].'", '.$descriptifAnnonce.','.$designEtPrixAnnonce.', '.$quantitEtEtat.')</script> </div>' ;
              else
                echo '<div class="item" id="'.$petiteAnnonce["id"].'"><a href="#"><img src="http://localhost/EsquisseBackEnd/server-backend-upload/uploads/'.$petiteAnnonce["img_link"].'" alt="'.$petiteAnnonce["designation"].'"></a> <script>updateDescriptor("'.$petiteAnnonce["id"].'",'.$descriptifAnnonce.','.$designEtPrixAnnonce.', '.$quantitEtEtat.')</script> </div>' ;
            $i++ ;
          }

      ?>
      </div>

      <a class="w3-button w3-black w3-display-right" id="pasliderbtn" href="#mySecondCarousel" data-slide="next">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </a>
    </div>

</div>

