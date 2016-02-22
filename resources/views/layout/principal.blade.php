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
	                        <li><a href="{{ url('/login') }}">Login</a></li>
	                        <li><a href="{{ url('/register') }}">Register</a></li>
                    	@else
	                        <li class="dropdown">
	                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                {{ Auth::user()->name }} <span class="caret"></span>
	                            </a>
	                            <ul class="dropdown-menu" role="menu">
	                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
	                            </ul>
	                        </li>
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
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
</html>