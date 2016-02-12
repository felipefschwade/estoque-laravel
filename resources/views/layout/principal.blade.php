<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<title>Estoque de Produtos</title>
	</head>
	<body>
		<header>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="/produtos">Listagem</a></li>
			  <li><a href="/produtos/novo">Novo</a></li>
			</ul>
		</header>
		<main>
			<div class="container-fluid">
				@yield('conteudo')
			</div>
		</main>	
	</body>
</html>