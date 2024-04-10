<?php

require_once('conexao/conecta.php');

if(isset($_POST['submit'])) {
    $p1 = $_POST['produto1'];
    $p2 = $_POST['produto2'];
    $p3 = $_POST['produto3'];

    $resultado = $p1 + $p2 + $p3;
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <link rel="shortcut icon" href="Logo/icone.ico" type="image/x-icon">

    <title>Carrinho | Étiquette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="cart.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <?php

    include_once('header.php');

    ?>

    <section class="meu-carrinho m-5">
        <div class="carrinho">
            <div class="row m-0">
                <div class="col-md-8 cart">
                    <div class="title">
                        <div class="row m-0">
                            <div class="col">
                                <h4 class="cart-header"><b>Carrinho</b></h4>
                            </div>
                            <div class="col align-self-center text-right text-muted">3 itens</div>
                        </div>
                    </div>
                    <div class="row m-0 border-top border-bottom">
                        <div class="row m-0 main align-items-center">
                            <div class="col-2"><img class="img-fluid product" src="Produtos/Terno/terno1.png"></div>
                            <div class="col">
                                <div class="row m-0 text-muted">Terno</div>
                                <div class="row m-0">Terno Dark Charcoal</div>
                            </div>
                            <div class="col">
                                <!-- <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> -->
                                <form action="" class="forms">
                                    <input type="number" name="quantity" placeholder="1" min="1" max="50">
                                </form>
                            </div>
                            <div class="col">R&dollar; 980.00
                                <span class="close">&#10005;</span>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="row m-0 main align-items-center">
                            <div class="col-2"><img class="img-fluid product" src="Produtos/Acessorio/grav1.png"></div>
                            <div class="col">
                                <div class="row m-0 text-muted">Gravata</div>
                                <div class="row m-0">Gravata Regular</div>
                            </div>
                            <div class="col">
                                <!-- <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> -->
                                <form action="" class="forms">
                                    <input type="number" name="quantity" placeholder="1" min="1" max="50">
                                </form>
                            </div>
                            <div class="col">R&dollar; 180.00 
                                <span class="close">&#10005;</span>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0 border-top border-bottom">
                        <div class="row m-0 main align-items-center">
                            <div class="col-2"><img class="img-fluid product" src="Produtos/Sapato/sapato7.png"></div>
                            <div class="col">
                                <div class="row m-0 text-muted">Derby</div>
                                <div class="row m-0">Sapato Social</div>
                            </div>
                            <div class="col">
                                <!-- <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a> -->
                                <form action="" class="forms">
                                    <input type="number" name="quantity" placeholder="1" min="1" max="50">
                                </form>
                            </div>
                            <div class="col">R&dollar; 380.00 <span class="close">&#10005;</span></div>
                        </div>
                    </div>
                    <div class="back-to-shop p-4 pb-0"><a href="index.php"><i class="fa-solid fa-arrow-left text-muted"></i> <span class="text-muted">Voltar para Home</span></a></div>
                </div>
                <div class="col-md-4 summary p-4">
                    <div>
                        <h5 class="sumario"><b>Sumário</b></h5>
                    </div>
                    <hr class="line">
                    <div class="row m-0">
                        <div class="col" style="padding-left:0;">TOTAL ITENS</div>
                        <div class="col text-right">R&dollar; 1540.00</div>
                    </div>
                    <form class="forms">
                        <p>OPÇÕES DE FRETES <i class="fa-solid fa-truck-fast"></i></p>
                        <select>
                            <option class="text-muted">Frete Grátis</option>
                            <option class="text-muted">Frete Econômico R&dollar;9,50</option>
                            <option class="text-muted">Frete Full R&dollar;38,90</option>
                            <option class="text-muted">Sedex R&dollar;21,00</option>
                            <option class="text-muted">FedEx R&dollar;26,50</option>
                            <option class="text-muted">Loggi R&dollar;14,00</option>
                        </select>
                        <p class="pt-4">ESCOLHA SEU PAGAMENTO <i class="fa-solid fa-credit-card"></i></p>
                        <!-- <input id="code" placeholder="Enter your code">>>>:) (°-°!)/ :( -->
                        <select>
                            <!-- Follow me ! No!!!!! >:((((Let me see the codes)))) (Okay) >:( -->
                            <option class="text-muted">Boleto Bancário</option>
                            <option class="text-muted">MasterCard</option>
                            <option class="text-muted">Visar</option>
                            <option class="text-muted">American Express</option>
                            <option class="text-muted">PayPal</option>
                            <option class="text-muted">Pix <i>10% de Desconto</i></option>
                        </select>
                    </form>
                    <div class="row m-0" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">VALOR TOTAL</div>
                        <div class="col text-right">R&dollar; 1540.00</div>
                    </div>
                    <button class="btn btn-dark check">FINALIZAR COMPRA</button>
                </div>
            </div>

        </div>
    </section>

    <?php

    include_once('rodape.php');

    ?>

</body>

</html>