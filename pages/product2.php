<?php
    include 'data/products.php'
?>

<head>
    <title>CandyLux | Baunilha com Morango</title>
</head>

<main>
    
    <div class="container p-3 mb-0 bg-dark text-light">
        
        <!-- presenting product -->
        <div class="container-fluid d-flex justify-content-between px-5 py-5">
            
            <div>
                
                <div>
                    <h1 class="display-5 fw-bold"><?php echo $arr['2']['name'] ?></h1>
                    <p class="col-md-8 fs-4"><?php echo $arr['2']['about'] ?></p>
                    <p>__________________________________________________</p><br>
                </div>
                
                <div class="mt-5">
                    
                    <p class="mb-0">por apenas</p>
                    <p class="display-1">$<?php echo $arr['2']['price'] ?><span class="fs-6">/UN</span></p>
                    <button type="button" class="btn btn-success btn-lg me-2">Comprar</button>
                    <button type="button" class="btn btn-outline-success btn-lg">Teste Grátis</button>
                
                </div>
            
            </div>
            
            <img src="./img/cupcake2.png" width="700px" alt="cupcake2">
            
        </div>
        
        <!-- did you know? -->
        <div class="container p-5 pt-0 pb-5">    
            
            <div class="container">
                
                <h1>Sobre os CupCakes:</h1> <br>
                
                O cupcake é um bolinho de origem inglesa, seu nome original é fairy cake, em português bolo de fada. <br/>
                <br/>
                Entretanto, depois de se tornar famoso nos Estados Unidos ganhou o nome de cupcake (bolo de xícara), <br/>
                pois sua receita é feita usando xícaras como medida. ... <br/>
                <br/>
                Há cupcakes simples, os com cobertura e recheio.<br/>
                <br/>
                A delícia acima tem sabor de morango!
            </div>
                

        </div>    
    
    </div>
    
    <!-- delivery options -->
    <div class="container pt-0 mb-4 bg-light rounded-3">
        
        <div class="container px-5 py-5">
            
            <h1>Delivery</h1> <br>
            <p class="">Se quiser receber em sua casa, também será atendido! <br></p>
            <img src="./img/ifood.png" width="250px" alt="ifood" class="mt-3 me-5">
            <img src="./img/uber-eats.png" width="250px" alt="uber-eats" class="mt-3 me-5">
            <img src="./img/rappi.png" width="250px" alt="uber-eats" class="mt-3">
        
        </div>
    
    </div>

</main>