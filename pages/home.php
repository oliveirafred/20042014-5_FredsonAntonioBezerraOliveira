<?php
    include 'data/products.php';
?>

<main>

    <!-- welcome display -->    <!-- -->
    <div class="row">
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <a href="#" ><img src="./img/homebg.png" class="img-responsive"></a>
            <h1 class="title display-5 fw-bold">Bem vindo! <small>Verifique nossas delícias!<br> ____________________________</small></h1>
        </div>
    </div>

    <!-- products -->
    <div class="container marketing">
        <div class="row pb-5">
            <h2 class="featurette-heading fs-1">Vários sabores que te levam ao delírio...</h2>
            <p class="lead mb-5">Selecionamos abaixo, alguns dos doces mais populares da CandyLux!</p>
            <hr class="featurette-divider mb-5">

        <div></div>
            
            <!-- candy 1-->
            <div class="col-lg-4">
                <img src="<?php echo $arr['1']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['1']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['1']['name'] ?></h2>
                <p><?php echo $arr['1']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="?i=product1">Mais informações...</a></p>
            </div>

            <!-- candy 2-->
            <div class="col-lg-4">
                <img src="<?php echo $arr['2']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['2']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['2']['name'] ?></h2>
                <p><?php echo $arr['2']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="?i=product2">Mais informações...</a></p>
            </div>
            
            <!-- candy 3-->
            <div class="col-lg-4">
                <img src="<?php echo $arr['3']['image'] ?>" class="img-thumbnail" alt="<?php echo $arr['3']['name'] ?>">

                <h2 class="mt-3"><?php echo $arr['3']['name'] ?></h2>
                <p><?php echo $arr['3']['description'] ?></p>
                <p><a class="btn btn-outline-danger" href="?i=product3">Mais informações...</a></p>
            </div>

        </div>
    </div> 

  </div>
   
  
</main>