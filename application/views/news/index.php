<?php foreach ($news as $news_item): ?>

	<h2><?php echo $news_item['title'] ?></h2>
	<div id="main">
		<?php echo $news_item['text'] ?>
	</div>

		<p> <a href="<?php echo site_url('/news/' . $news_item['slug']) ?>"> Visualizar</a></p>
		<p> <a href="<?php echo site_url('/news/deletar/' . $news_item['id']) ?>" onClick = "javascript: return confirm('Você tem certeza?')"> Deletar</a></p>
		<p> <a href="<?php echo site_url('/news/editar/' . $news_item['id']) ?>"> Editar</a></p>

	<?php endforeach; ?>