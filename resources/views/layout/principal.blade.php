<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<title>Estoque de Produtos</title>
		<style type="text/css">
			body {
				padding-top: 70px;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<header>
				<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<ul class="nav navbar-nav">
						<li><a href="/produtos">Listagem</a></li>
					  	<li><a href="/produtos/novo">Novo</a></li>
					</ul>
				</div>
				</nav>
			</header>
			<main>
					@yield('conteudo')
			</main>
		</div>	
	</body>
</html>