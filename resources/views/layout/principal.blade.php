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
					  	@if (Auth::guest())
						   <li><a href="/auth/login">Login</a></li>
						   <li><a href="/auth/register">Register</a></li>
						@else
						   <li>{{ Auth::user()->name }} </li>
						   <li><a href="/auth/logout">Logout</a></li>
						@endif
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