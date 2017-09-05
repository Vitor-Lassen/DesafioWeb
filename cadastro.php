<?php
	require_once "connection.php";
	
?>
<html>
	<head>
		<meta charset= utf-8>
		<title> Cadastro</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="javascript.js"></script>
	</head>
	<body>
		<P id="titulo"> Cadastro </p> 
		<form method= "POST" action="?go=cadastrar" name ="form" onSubmit="return validacao();" >
			<table id="table" >
					<td> Tipo</td>
					<td> <input type="text" name="tipo" id="tipo" class="txt"/> </td>
				</tr>
				<tr>
					<td> Nome</td>
					<td> <input type="text" name="nome" id="nome" class="txt" maxlength="50"/> </td>
				</tr>
				<tr>
					<td> Quantidade</td>
					<td> <input type="number" name="quantidade" id="quantidade" class="txt"  step=1 onkeypress="return SomenteNumero(event)"/> </td>
				</tr>
				<tr>
					<td> Preço</td>
					<td> <input type="number" step=0.01 name="preco" id="preco" class="txt" 1/> </td>
				</tr>
					<td> Nogociação</td>
					<td> <select class="txt" name="tipoNegociacao">
						<option value="Venda">Venda</option>
						<option value="Compra">Compra</option>
					</select><td>
				</tr>
				<tr>
					<td><input type="button" value="Operações" id="btnOp" onClick="Nova()"/></td>
					<td><input type="submit" value="Cadastar" id="btnCad"/> </td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php
	
	if(@$_GET['go'] == 'cadastrar'){
		$tipo = $_POST['tipo'];
		$nome = $_POST['nome'];
		$quantidade = $_POST['quantidade'];
		$preco = $_POST['preco'];
		$tipoNegociacao = $_POST['tipoNegociacao'];
		//if (($tipo != "")&&($nome != "")){
			mysqli_query($con,"INSERT INTO `tb_mercadorias`( `TIPO_MERC`,`NOME_MERC`,`QUAN_MERC`,`PRECO`,`TIPO_NEG`) VALUES ('$tipo','$nome','$quantidade','$preco','$tipoNegociacao')");
			echo "<script> alert ('Registro armazenado!') </script>";
			echo "<meta http-equiv='refresh' content='0, url=operacoes.php'>";
		//}
		
	}
?>