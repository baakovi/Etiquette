<?php
require_once('../conexao/conecta.php');
if (isset($_GET['pesquisa']) && $_GET['pesquisa'] != '') {
    $pesquisa = $_GET['pesquisa'];
    $sql = "SELECT id_produto FROM produtos WHERE CONCAT(' ', ' ', nome_produto, detalhes_produto, ' ', ' ') LIKE '%$pesquisa%'";
    $resultado = mysqli_query($conexao, $sql);
    $quantidade = mysqli_num_rows($resultado);

    $pesquisapag = "&pesquisa=" . $_GET['pesquisa'];
    if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
        $paginaatual = $_GET['pagina'];
    } else {
        $paginaatual = 1;
    }
    $url = "?pagina=";

    $paginaqtdd = 25;

    $valorinicial = ($paginaatual * $paginaqtdd) - $paginaqtdd;
    $paginafinal = ceil($quantidade / $paginaqtdd);
    $paginainicial = 1;
    $paginaproxima = $paginaatual + 1;
    $paginaanterior = $paginaatual - 1;

    $sqlpag = "SELECT*FROM produtos WHERE CONCAT(' ', ' ', nome_produto, detalhes_produto, ' ', ' ') LIKE '%$pesquisa%' ORDER BY id_produto DESC LIMIT $valorinicial, $paginaqtdd";
    $resultadopag = mysqli_query($conexao, $sqlpag);
    $linhapag = mysqli_fetch_assoc($resultadopag);
}
?>

<!doctype html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>Resultado da Pesquisa | Étiquette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="tf.css">

</head>

<body>

    <!-- Header -->

    <div class="container-fluid justify-content-center" style="background-color: #F5FBEF;">

        <div class="row">

            <div class="col-lg-12">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner mt-2">
                        <div class="carousel-item active">
                            <p class="text-center">Frete grátis a partir de R$ 500,00</p>
                        </div>

                        <div class="carousel-item">
                            <p class="text-center">12x Sem Juros</p>
                        </div>

                        <div class="carousel-item">
                            <p class="text-center">Brindes exclusivos</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <nav class="py-3" style="background-color: #0B161E;">

        <header class="m-3">
            <div class="container-fluid d-flex flex-wrap justify-content-center">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                    <img src="../Logo/etiquette_logo.png" alt="Logo da Étiquette" width="180">
                </a>

                <!-- component -->
                <form action="topo.php" method="GET">
                    <div>

                        <div class="p-2 py-6 search-input">

                            <input class="text-input" name="pesquisa" type="search" placeholder="Pesquisar..." aria-label="Search">

                            <button type="submit" class="search-button btn"><i class="fa-solid fa-magnifying-glass text-white w-6 h-6"></i></button>

                        </div>

                    </div>

                </form>

            </div>
        </header>

        <div class="container-fluid d-flex flex-wrap" style="justify-content: space-around;">
            <!-- me auto: centraliza? -->

            <!-- AVISO: <a></a> com './404/error.php' são arquivos incompletos que não foram feitos/finalizados, levando para uma página de erro -->
            <ul class="nav">
                <li class="nav-item"><a href="../index.php" class="nav-link" aria-current="page">Home</a></li>

                <!-- MODAL -->

                <!-- Button trigger modal -->
                <a type="button" class="btn modal-btn nav-link" data-bs-toggle="modal" data-bs-target="#Modal">
                    Categorias
                </a>

                <!-- Modal -->
                <div class="modal modal-sm fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px); box-shadow: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <h3 class="lanc-text" style="padding: 15px 0 15px 0; cursor: pointer;">Escolha sua categoria</h3>

                                <hr class="hr-modal">

                                <ul style="list-style: none; text-decoration: none; padding: 0">
                                    <li><a class="nav-modal" href="../ternos.php">Terno</a></li>
                                    <li><a class="nav-modal" href="../camisas.php">Camisa</a></li>
                                    <li><a class="nav-modal" href="../paletos.php">Paletó</a></li>
                                    <li><a class="nav-modal" href="../calcas.php">Calça</a></li>
                                    <li><a class="nav-modal" href="../sapatos.php">Sapato</a></li>
                                    <li><a class="nav-modal" href="../coletes.php">Colete</a></li>
                                    <li><a class="nav-modal" href="../acessorios.php">Acessório</a></li>
                                </ul>
                                <!-- <a href="logoff.php"></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FIM MODAL -->

                <li class="nav-item"><a href="../404/blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="../404/faq.php" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="../404/casamentos.php" class="nav-link">Casamentos</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link disabled text-white" aria-disabled="true">
                        <i class="fa-solid fa-user" style="padding-right: 10px"></i>
                        Minha conta
                    </a>
                </li>

                <li class="nav-item"><a href="../carrinho.php" class="nav-link"><i class="fa-solid fa-cart-shopping" style="padding-right: 10px"></i>Carrinho</a></li>

            </ul>
        </div>

    </nav>

    <?php if (isset($_GET['pesquisa'])) { ?>

        <?php if ($quantidade > 0) {

            echo "<h2 class='h-search'>Resultado da pesquisa para: $pesquisa </h2>";

            do { ?>
                <div>
                    <a class="a-search" href="produto.php?id_produto=<?php echo $linhapag['id_produto'] ?>">
                        <p><?php echo $linhapag['nome_produto'] ?></p>
                    </a>
                </div>
        <?php } while ($linhapag = mysqli_fetch_assoc($resultadopag));
        } ?>

        <?php if ($quantidade <= 0) { ?>
            <div>
                <p style="text-align: center; margin-top: 50px; font-weight:bold; font-size: 30px;">Nenhum resultado encontrado!</p>
            </div>
    <?php }
    } ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>

</body>

</html>