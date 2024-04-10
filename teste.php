<?php
/*
		Estrutura condicional IF
		isset() : função recebe uma variável e verifica se ela existe. retorna valor boolean
		
		$_POST : variável superglobal que recebe os valores do formulário com método "post"
	*/
if (isset($_POST['submit'])) {
    // $n1 recebe o número do campo do formulário de nome 'numero1'
    $n1 = $_POST['numero1'];
    // $n2 recebe o número do campo do formulário de nome 'numero2'
    $n2 = $_POST['numero2'];
    // $n3 recebe o número do campo do formulário de nome 'numero3'
    $n3 = $_POST['numero3'];

    // echo é equivalente ao printf
    // echo "Resultado: ";
    // echo $n1 + $n2 + $n3;
	$resultado = $n1 + $n2 + $n3;
}
?>

<!--
	Tag <form> para declarar formulários em HTML
		* método : POST para enviar os valores de forma 'oculta' para o PHP
		* action : é pra direcionar onde o código que vai receber os valores está
	Tag <input> define o campo de formulario
		* type : define o tipo de campo vai ser, por ex: text, number, url, password...
		* name : define o nome que a variavel superglobal $_POST vai receber
		* placeholder : define um nome de exibição no formulário
	$_SERVER['PHP_SELF'] recebe a url atual, 
 -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="number" name="numero1" placeholder="Numero 1">
    <input type="number" name="numero2" placeholder="Numero 2">
    <input type="number" name="numero3" placeholder="Numero 3">
    <input type="submit" name="submit">
	<?php echo $resultado; ?>
</form>