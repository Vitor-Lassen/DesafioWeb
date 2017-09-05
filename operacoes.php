<?php
	require_once "connection.php";
?>
<html>
	<head>
		<meta charset= utf-8>
		<title> Operações</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="javascript.js"></script>
	</head>
	<body>
		<P id="titulo"> Operações </p> 
	</body>
</html>

<?php
		$consulta = mysqli_query($con,"SELECT * FROM TB_MERCADORIAS");
		
		echo "<table  id='table'><tr><td>Código</td><td>Tipo</td><td>Nome</td><td>Quantidade</td><td>Preço</td><td>Tipo Negociação</td></tr>";
		while ($registro = mysqli_fetch_assoc($consulta)){
			echo "<tr><td>".$registro["COD_MERC"]."</td><td>".$registro["TIPO_MERC"]."
			</td><td>".$registro["NOME_MERC"]."</td><td>".$registro["QUAN_MERC"]."</td><td>".$registro["PRECO_MERC"]."</td><td>".$registro["TIPO_NEGOCIO"]."</td>";
		}
		echo "</table>";
	
?>