<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>::.pagina de resposta.::</title>
	<meta charset="utf-8"/>
</head>
<body>

	<?PHP

require_once('conexao.php');

$nome = $_POST['Nome'];
$email = $_POST['Email'];
$celular = $_POST['Celular'];


$bancoDados = new db();


$link = $bancoDados->conecta_mysql(); 

$sql = "insert into usuarios(email, nome, email, celular) valeus('null','$nome','$email', '$celular')";

mysqli_query($link, $sql);

?>
<h1>Cadastro Realizado com Sucesso!</h1><br><hr>
<h3>Site seguro</h3><br>

<a href="index.php"> Voltar para pagina Inicial</a>

</body>
</html>