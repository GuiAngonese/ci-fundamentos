<?php foreach ($clients as $clients_item): ?>

	<h2><?php echo $clients_item['nome'] ?></h2>
	<div id="main">
		<?php echo $clients_item['cidade'] ?>
	</div>

		<p> <a href="<?php echo site_url('/clients/' . $clients_item['slug']) ?>"> Visualizar</a></p>
		<p> <a href="<?php echo site_url('/clients/deletar/' . $clients_item['id']) ?>"onClick = "javascript: return confirm('Você tem certeza?')"> Deletar</a></p>
		<p> <a href="<?php echo site_url('/clients/editar/' . $clients_item['id']) ?>"> Editar</a></p>

	<?php endforeach; ?>