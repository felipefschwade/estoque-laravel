<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<title>Detalhes de um Produto</title>
	</head>
	<body>
		<h1>Detalhes do Produto <?= $produto->nome ?></h1>
		<ul>
			<li>
				Valor: <?= $produto->valor?>
			</li>
			<li>
				Descrição: <?= $produto->descricao?>
			</li>
			<li>
				Quantidade em Estoque: <?= $produto->quantidade?>
			</li>
		</ul>
	</body>
</html>