<?php
require_once('conexao/conecta.php');

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <link rel="shortcut icon" href="Logo/icone.ico" type="image/x-icon">

    <title>Sapatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="a.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Início do Header -->

    <?php

    include('header.php')

    ?>

    <!-- Fim do Header -->

    <!-- Início da Amostra -->

    <section class="acessorios">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center" style="margin: 10% 0 10% 0;">

                    <h1 class="amostra-text">Sapatos de couros naturais e ecológicos, materiais tradicionais para a sua comodidade</h1>

                </div>

                <hr>

                <div class="col-12 py-5"></div>

                <!-- Conjunto 1 -->
                <!-- Produto 1 -->
                <!-- Teste (Vou deixar o form comentado por enquanto) -->
                <!-- <form action="admin/criar.php" method="post"> -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato5.png" class="card-img-top Sapato1" alt="Sapato Social 1">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseOne">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Liver</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>GRD1234567</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->

                <!-- Produto 2 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato6.png" class="card-img-top" alt="Sapato Social 2">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTwo">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Bistre</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>NBC7890XYZ</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato1.png" class="card-img-top" alt="Sapato Social 3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseThree">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Royal Brown</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>CODE4567AB</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato9.png" class="card-img-top Sapato Social4" alt="Sapato Social 4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFour">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Dark Sienna</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>QCOD6543XY</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-5"></div>
                <!-- Produto 5 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato2.png" class="card-img-top" alt="Sapato Social 5">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFive">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Caput Mortuum</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ITEM5678CD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 6 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato15.png" class="card-img-top" alt="Sapato Social 6">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social Brick Red</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSix">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Raisin Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>1A2B3C4D5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 7 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato8.png" class="card-img-top" alt="Sapato Social ">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSeven">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Chinese Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>P9RO988CT7</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 8 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato3.png" class="card-img-top grav4" alt="Sapato Social ">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseEight">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Vampire Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>NUM5678ABC</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 2 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 3 -->
                <!-- Produto 9 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato16.png" class="card-img-top borb1" alt="Sapato Social 9">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseNine">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Raisin Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>123XYZ7890</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 10 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato4.png" class="card-img-top borb2" alt="Sapato Social 10">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Rich Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ITEM4321ZZ</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 11 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseEleven" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato7.png" class="card-img-top borb3" alt="Sapato Social 11">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseEleven">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>GOODS5678K</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 12 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTwelve" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato10.png" class="card-img-top borb4" alt="Sapato Social 12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social </h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTwelve">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Rich Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>C6F8G1H9I0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 3 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 4 -->
                <!-- Produto 13 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseThirteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato12.png" class="card-img-top" alt="Sapato Social 13">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$420,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseThirteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Eerie Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>40% Couro de Jacaré e 60% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>9876XYZ123</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 14 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFourteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato14.png" class="card-img-top" alt="Sapato Social 14">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$420,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFourteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Yankees Blue</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>40% Couro de Jacaré e 60% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ABCD4321XX</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 15 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFifteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato13.png" class="card-img-top" alt="Sapato Social 15">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$420,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFifteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Wine</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Sapato Social</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>40% Couro de Jacaré e 60% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>999ITEMYYY</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 16 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSixteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Sapato/sapato11.png" class="card-img-top" alt="Sapato Social 16">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Sapato Social </h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSixteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>White</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Derby</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro Bovino</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>CODEX12345</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 4 -->

                <div class="col-12 py-5"></div>

            </div>

        </div>

    </section>

    <!-- Fim da Amostra -->

    <!-- Início da Verificação -->

    <div class="container">

        <div class="row">

            <hr>

            <div class="col-12 text-center py-4">

                <h6>Verificado por
                    <a href="https://judge.me/" target="_blank" style="color: #1446A0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="92" height="23" viewBox="0 0 92 23" fill="none">
                            <path d="M0 0v23h22.781V0H0zm9.996 3.412h5.146v10.949c0 2.877-2.296 5.227-5.146 5.227S4.85 17.237 4.85 14.361h2.973c0 1.206.979 2.195 2.174 2.195s2.176-.989 2.176-2.195V6.412H9.996v-3z" fill="url(#A)"></path>
                            <g clip-path="url(#B)" fill="#399">
                                <path d="M33.476 12.407a7.65 7.65 0 0 1-.121 1.381 3.13 3.13 0 0 1-.463 1.186 2.43 2.43 0 0 1-.977.829c-.422.208-.975.311-1.66.311a3.43 3.43 0 0 1-2.025-.581c-.551-.387-.907-.992-1.069-1.817l1.004-.249a1.48 1.48 0 0 1 .728.015 1.5 1.5 0 0 1 .636.361c.181.168.417.261.662.261a.86.86 0 0 0 .599-.196 1.16 1.16 0 0 0 .314-.488c.068-.204.108-.416.121-.632l.022-.632V5.564h1.031a1.18 1.18 0 0 1 .842.356 1.23 1.23 0 0 1 .349.859l.006 5.629zm7.647 3.445h-1.309a.37.37 0 0 1-.263-.112c-.07-.072-.109-.168-.109-.269v-.578h-.029a2.37 2.37 0 0 1-.291.408 1.95 1.95 0 0 1-.436.363 2.45 2.45 0 0 1-.582.261 2.38 2.38 0 0 1-.713.102c-.453.018-.903-.07-1.318-.255a1.9 1.9 0 0 1-.784-.704 2.8 2.8 0 0 1-.371-1.062c-.064-.437-.095-.879-.093-1.321V9.17c0-.101.039-.198.109-.269a.37.37 0 0 1 .264-.112h1.392a.37.37 0 0 1 .263.112c.07.071.109.168.109.269v3.079l.022.632a2.05 2.05 0 0 0 .128.604.94.94 0 0 0 .376.482.91.91 0 0 0 .587.142 1.29 1.29 0 0 0 .669-.148 1.03 1.03 0 0 0 .393-.406 1.68 1.68 0 0 0 .177-.574 4.99 4.99 0 0 0 .044-.669V9.17a.38.38 0 0 1 .11-.269.37.37 0 0 1 .264-.112h1.391a.37.37 0 0 1 .264.112c.07.071.109.168.109.269v6.301c0 .05-.01.1-.028.146s-.046.088-.081.124-.076.063-.121.083-.094.029-.143.029zm9.737-.698l-.301.402a1.08 1.08 0 0 1-.361.305 1.06 1.06 0 0 1-.453.119 1.07 1.07 0 0 1-.84-.368l-.595-.684h-.028a2.45 2.45 0 0 1-.336.386 2.58 2.58 0 0 1-.484.356 2.94 2.94 0 0 1-.612.261 2.36 2.36 0 0 1-.692.102 3.51 3.51 0 0 1-1.396-.27 3.11 3.11 0 0 1-1.076-.755 3.37 3.37 0 0 1-.691-1.155 4.29 4.29 0 0 1-.243-1.468 4.55 4.55 0 0 1 .221-1.426 3.91 3.91 0 0 1 .627-1.198 3.09 3.09 0 0 1 .991-.836 2.78 2.78 0 0 1 1.327-.311 3.59 3.59 0 0 1 1.247.211 1.99 1.99 0 0 1 .948.719h.029v-4.05c0-.167.065-.327.181-.445a.61.61 0 0 1 .436-.184h.947a.61.61 0 0 1 .42.168.63.63 0 0 1 .195.415l.669 9.274c.01.155-.035.308-.128.431zm-2.55-2.832a1.85 1.85 0 0 0-.449-1.295c-.291-.329-.72-.494-1.261-.494s-.962.165-1.261.494a2.08 2.08 0 0 0 0 2.588c.3.329.72.494 1.261.494s.963-.165 1.261-.494c.309-.355.47-.819.449-1.293zm10.947 2.937c0 1.335-.355 2.327-.991 3.044-1.505 1.701-4.124 1.108-4.839.826-1.107-.436-2.63-1.498-2.775-2.239-.05-.253.097-.556.291-.823a1.39 1.39 0 0 1 .477-.389c.185-.092.388-.14.594-.142 1.389.082 1.018 1.885 3.2 1.885.679 0 1.139-.162 1.447-.486a1.72 1.72 0 0 0 .354-.574 1.74 1.74 0 0 0 .108-.669v-.682h-.028a2.04 2.04 0 0 1-.919.719 2.92 2.92 0 0 1-1.034.211 3.53 3.53 0 0 1-1.396-.268 3.11 3.11 0 0 1-1.076-.756 3.38 3.38 0 0 1-.691-1.155 4.25 4.25 0 0 1-.243-1.468c0-.465.075-.926.221-1.366a3.75 3.75 0 0 1 .627-1.177 3.16 3.16 0 0 1 .991-.822c.411-.213.866-.32 1.326-.311a3.25 3.25 0 0 1 .834.101 3.2 3.2 0 0 1 .676.262 2.47 2.47 0 0 1 .514.356 2.23 2.23 0 0 1 .342.384h.029v-.713a.22.22 0 0 1 .062-.153.21.21 0 0 1 .15-.063 1.73 1.73 0 0 1 .672.136 1.75 1.75 0 0 1 .569.388 1.79 1.79 0 0 1 .38.581 1.82 1.82 0 0 1 .133.685l-.004 4.68zm-5.382-2.979a1.73 1.73 0 0 0 .126.658c.084.208.209.398.365.557a1.89 1.89 0 0 0 .543.384 1.54 1.54 0 0 0 .676.148 1.57 1.57 0 0 0 .671-.148 1.88 1.88 0 0 0 .548-.384c.157-.159.281-.348.366-.557s.129-.432.129-.657a1.74 1.74 0 0 0-.129-.657c-.085-.208-.209-.397-.366-.557s-.345-.291-.548-.386a1.59 1.59 0 0 0-.671-.148c-.233-.002-.464.049-.676.148a1.89 1.89 0 0 0-.543.386 1.72 1.72 0 0 0-.498 1.21l.006.003zm12.971 2.061c.05.038.092.087.122.143a.46.46 0 0 1 .053.182c.005.064-.005.128-.027.188a.45.45 0 0 1-.101.159 3.45 3.45 0 0 1-.956.649c-.51.239-1.064.363-1.625.363a4.29 4.29 0 0 1-1.504-.263c-.452-.162-.869-.414-1.225-.741-.35-.328-.629-.726-.82-1.17a4.03 4.03 0 0 1 0-3.052 3.5 3.5 0 0 1 .82-1.17 3.6 3.6 0 0 1 1.225-.749 4.29 4.29 0 0 1 1.504-.261 3.35 3.35 0 0 1 1.347.261c.394.167.745.423 1.027.749a3.43 3.43 0 0 1 .649 1.17 4.81 4.81 0 0 1 .228 1.526v.05a.64.64 0 0 1-.183.447c-.116.118-.274.185-.439.185h-4.34a1.74 1.74 0 0 0 .56.989c.296.251.671.383 1.056.371a1.59 1.59 0 0 0 .89-.239 2.7 2.7 0 0 0 .236-.178c.126-.113.286-.18.454-.188a.74.74 0 0 1 .471.141l.577.436zm-1.421-2.818a1.29 1.29 0 0 0-.082-.51 1.27 1.27 0 0 0-.275-.434c-.123-.13-.272-.232-.437-.3s-.341-.099-.519-.093c-.215-.004-.428.035-.627.116a1.63 1.63 0 0 0-.464.297 1.33 1.33 0 0 0-.291.423 1.42 1.42 0 0 0-.122.501l2.816.002zm25.858 2.818c.05.038.092.087.122.143a.45.45 0 0 1 .053.182.46.46 0 0 1-.027.188.45.45 0 0 1-.101.159 3.45 3.45 0 0 1-.956.649c-.51.239-1.064.363-1.625.363a4.29 4.29 0 0 1-1.504-.263c-.452-.162-.869-.414-1.225-.741-.35-.328-.629-.726-.82-1.17a4.03 4.03 0 0 1 0-3.052 3.5 3.5 0 0 1 .82-1.17 3.61 3.61 0 0 1 1.225-.749 4.29 4.29 0 0 1 1.504-.261 3.35 3.35 0 0 1 1.347.261c.394.167.745.423 1.027.749a3.43 3.43 0 0 1 .649 1.17A4.82 4.82 0 0 1 92 12.327v.05a.64.64 0 0 1-.183.447c-.116.118-.274.185-.439.185h-4.341a1.74 1.74 0 0 0 .56.989c.296.251.671.383 1.056.371a1.59 1.59 0 0 0 .89-.239 2.7 2.7 0 0 0 .236-.178c.126-.113.286-.18.454-.188a.74.74 0 0 1 .471.141l.578.436zm-1.421-2.818a1.29 1.29 0 0 0-.082-.51 1.27 1.27 0 0 0-.275-.434c-.123-.13-.272-.232-.437-.3s-.341-.099-.519-.093c-.214-.004-.428.035-.627.116a1.63 1.63 0 0 0-.464.297 1.33 1.33 0 0 0-.291.423c-.069.159-.112.328-.122.501l2.816.002zm-20.959 3.079c-.001-.179.033-.357.099-.523.063-.161.158-.307.278-.429a1.26 1.26 0 0 1 .421-.283 1.36 1.36 0 0 1 1.018 0 1.28 1.28 0 0 1 .698.712c.134.336.134.711 0 1.047a1.28 1.28 0 0 1-.271.43 1.24 1.24 0 0 1-.422.282 1.34 1.34 0 0 1-1.018 0c-.158-.064-.302-.161-.422-.283s-.214-.269-.278-.428c-.068-.166-.103-.344-.105-.524zm4.235-5.813h.767a.92.92 0 0 1 .358.073.93.93 0 0 1 .304.207.96.96 0 0 1 .203.31.97.97 0 0 1 .071.365h.029a1.78 1.78 0 0 1 .291-.406 2.05 2.05 0 0 1 .436-.363c.182-.112.378-.2.582-.262a2.44 2.44 0 0 1 .713-.101 2.66 2.66 0 0 1 1.29.304 1.93 1.93 0 0 1 .85.959 2.32 2.32 0 0 1 .897-.973 2.65 2.65 0 0 1 1.297-.297 2.59 2.59 0 0 1 1.175.239 1.94 1.94 0 0 1 .756.654 2.82 2.82 0 0 1 .399.974 5.7 5.7 0 0 1 .121 1.198v3.814a.36.36 0 0 1-.103.253c-.066.067-.155.105-.248.105H81.89a.35.35 0 0 1-.249-.104c-.033-.033-.059-.073-.076-.116s-.027-.09-.027-.137V11.74a1.66 1.66 0 0 0-.207-.851c-.138-.237-.38-.356-.727-.356a1.4 1.4 0 0 0-.62.123c-.16.077-.297.195-.399.343a1.41 1.41 0 0 0-.214.509 2.77 2.77 0 0 0-.064.609v3.366c0 .098-.039.192-.107.261a.36.36 0 0 1-.257.108h-1.412a.37.37 0 0 1-.139-.028.35.35 0 0 1-.117-.08.37.37 0 0 1-.079-.12.38.38 0 0 1-.028-.141v-3.366l-.014-.464c-.008-.178-.042-.355-.1-.523a1 1 0 0 0-.278-.421.81.81 0 0 0-.563-.175 1.29 1.29 0 0 0-.669.148 1.03 1.03 0 0 0-.393.406 1.68 1.68 0 0 0-.177.575 4.93 4.93 0 0 0-.044.667v3.16a.36.36 0 0 1-.103.253c-.066.067-.155.105-.248.105h-1.437c-.093 0-.182-.038-.248-.105a.36.36 0 0 1-.103-.253V9.147a.36.36 0 0 1 .101-.251c.064-.067.152-.105.244-.107z"></path>
                            </g>
                            <defs>
                                <linearGradient id="A" x1="11.391" y1="0" x2="11.391" y2="23" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#399"></stop>
                                    <stop offset="1" stop-color="#2d8396"></stop>
                                </linearGradient>
                                <clipPath id="B">
                                    <path fill="#fff" transform="translate(27.162 4.865)" d="M0 0h64.838v14.596H0z"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <!-- <i class="fa-solid fa-user-check" style="padding-left: 5px"></i> -->
                </h6>

                <h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    104 comentários
                </h6>

            </div>

        </div>

    </div>

    <!-- Final da Verificação -->

    <!-- Início do Rodapé -->

    <?php

    include('rodape.php');

    ?>

    <!-- Fim do Rodapé -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>