<html>
<head>
	<title>Estoque de Produtos</title>
</head>
<body>
	<h1>Controle de Estoque</h1>
	<table>
		<?php foreach ($produtos as $p) { ?>
			<tr>
            	<td><?=$p->nome?></td>
            	<td><?=$p->descricao?></td>
            	<td><?=$p->valor?></td>
            	<td><?=$p->quantidade?></td>
            </tr>
	       <?php } ?>
	</table>
</body>
</html>