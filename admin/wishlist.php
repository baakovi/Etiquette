<?php

require_once('../conexao/conecta.php');

session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>Minha Conta | Étiquette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/monzane" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .verticalLine {
            border-left: 4px solid #000;
        }
    </style>

</head>

<body>

    <!-- Início Topo -->

    <?php

    include('topo.php')

    ?>

    <!-- Fim Topo -->

    <!-- Início da Minha Conta -->

    <section class="account">

        <div class="container" style="padding: 60px 0 60px 0;">

            <div class="row">

                <div class="col-lg-3 p-0">

                    <div class="dados">

                        <h2 class="py-4">
                            <i class="fa-solid fa-circle-user fa-2xl"></i>
                            Olá!
                        </h2>

                        <ul style="padding-left: 0;">

                            <a href="account.php">
                                <li>Dados pessoais</li>
                            </a>

                            <a href="addresses.php">
                                <li>Endereço</li>
                            </a>

                            <a href="orders.php">
                                <li>Pedidos</li>
                            </a>

                            <a href="cards.php">
                                <li>Cartões</li>
                            </a>

                            <div class="verticalLine">
                                <a href="wishlist.php">
                                    <li>Lista de desejos</li>
                                </a>
                            </div>

                            <!-- Button trigger modal -->
                            <li type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Sair
                            </li>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                <div class="modal-dialog modal-dialog-centered">

                                    <div class="modal-content">

                                        <div class="modal-header" style="border: none;">

                                            <h1 class="modal-title fs-5 lanc-text" id="exampleModalLabel">Deseja mesmo sair?</h1>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>

                                        <div class="modal-body"></div>

                                        <div class="modal-footer" style="border: none;">

                                            <button type="button" class="btn btn-modal" data-bs-dismiss="modal"><a data-bs-dismiss="modal">CANCELAR</a></button>

                                            <div style="margin-left: 20px;">

                                                <button type="button" class="btn btn-dark"><a href="logoff.php">SAIR</a></button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- bom dia -->
                        </ul>

                    </div>

                </div>

                <div class="col-lg-9 p-0">

                    <h1 class="text-profile pt-5 my-4">Lista de Desejos</h1>

                    <h5 class="fw-bold">Esta lista está vazia.</h5>

                </div>

            </div>

    </section>

    <!-- Fim da Minha Conta -->

    <!-- Início Rodapé -->

    <?php

    include('footer.php')

    ?>

    <!-- Fim Rodapé -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>

</body>

</html>