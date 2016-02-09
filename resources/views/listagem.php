<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title>Estoque de Produtos</title>
</head>
<body>
	<h1>Controle de Estoque</h1>
	<table class="table">
		<?php foreach ($produtos as $p) { ?>
			<tr>
            	<td><?=$p->nome?></td>
            	<td><?=$p->descricao?></td>
            	<td><?=$p->valor?></td>
            	<td><?=$p->quantidade?></td>
        		<td><a href="/produtos/mostra/<?=$p->id?>">
					  <span class="glyphicon glyphicon-search"></span>
					</a>
				</td>	
            </tr>
	       <?php } ?>
	</table>
</body>
</html>