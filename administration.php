<?php

require_once('conexao/conecta.php');

if(isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'Produtos/' . $p_image;

    $insert_query = mysqli_query($conexao, "INSERT INTO `products`(name, price image) VALUES('$p_name', '$p_price', '$p_image')") or die ('query failed');

    if($insert_query) {
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'Produto adicionado com sucesso';
    }
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="Logo/icone.ico" type="image/x-icon">

    <title>Gerenciamento de Produtos | Étiquette</title>

    <!-- Bootstrap CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Google Fonts Link -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<?php

    if(isset($message)) {
        foreach($message as $message) {
            echo '<div class="message"> <span>' . $message . '</span> <i class="fa-solid fa-xmark" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        }
    };

?>

<?php include 'header_cart.php'; ?>

<div class="container">

    <section>

        <form action="" method="post" class="add-product-form" enctype="multipart/form-data">

            <h3>Add a new product</h3>

            <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>
            
            <input type="number" name="p_price" min="0" placeholder="Enter the product price" class="box" required>
            
            <input type="file" name="p_name" accept="image/png, image/jpg, image/jpeg" class="box" required>

            <input type="submit" value="Add the product" name="add_product" class="btn-cart btn-primary">

        </form>

    </section>

</div>

<?php include 'rodape.php'; ?>

<!-- Custom JS File Link -->
<script src="js/script.js"></script>
    
</body>

</html>