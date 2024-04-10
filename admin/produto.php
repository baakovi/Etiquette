<?php
require_once('../conexao/conecta.php');
if (isset($_GET['id_produto']) && $_GET['id_produto'] != '') {
  $id_produto = $_GET['id_produto'];
  $sql = "SELECT*FROM produtos WHERE id_produto=$id_produto";
  $resultado = mysqli_query($conexao, $sql);
  $linha = mysqli_fetch_assoc($resultado);
  $quantidade = mysqli_num_rows($resultado);
} else {
  $quantidade = 0;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">
  <!-- <title>Resultado da Pesquisa | Étiquette</title> -->
  <title><?php echo $linha['nome_produto'] ?> | Étiquette</title>

  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

  <style>
    body {
      font-size: 16px;
      font-family: 'Quicksand', sans-serif;
    }

    .product {
      width: 25%;
      padding: 16px 20px;
      border: none;
      border-radius: 4px;
      background-color: #f1f1f1;
      text-align: center;
    }

    .img-product {
      width: 250px;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <!-- Início do Header -->

  <section id="produtos">

    <?php

    include_once 'topo.php';

    ?>

    <!-- Fim do Header -->

    <?php if ($quantidade > 0) { ?>
      <div>
        <div style=" width: auto; height: 75vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <h2 style="font-weight: bold; font-family: 'Fira Sans', sans-serif; margin-bottom: 10px;"><?php echo $linha['nome_produto'] ?></h2>
          <?php if ($linha['imagem_produto'] != '') { ?>
            <img src="../Produtos/Acessorio/<?php echo $linha['imagem_produto'] ?>" alt="<?php echo $linha['nome_produto'] ?>" class="img-fluid img-product">
          <?php } ?>
          <!-- <p><?php echo $linha['descricao_produto'] ?></p> -->
          <p class="product"><?php echo $linha['detalhes_produto'] ?></p>
          <p class="product" style="font-weight: bold;">R&dollar; <?php echo $linha['preco'] ?>.00</p>
          <a href="javascript:history.back();" class="btn btn-dark">Voltar</a>
        </div>
      </div>
    <?php } ?>
    <?php if ($quantidade <= 0) { ?>
      <div>
        <div>
          <h2 style="text-align: center; margin: 20px 0 20px 0;">Não existe nenhum produto selecionado para ser exibido!</h2>
        </div>
      </div>
    <?php } ?>

    <!-- Início do Rodapé -->

    <?php

    include('footer.php');

    ?>

  </section>

  <!-- Fim do Rodapé -->

</body>

</html>