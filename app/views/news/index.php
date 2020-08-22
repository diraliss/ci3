<?php foreach ($news as $news_item): ?>

	<h3><?php echo $news_item['title']; ?></h3>
	<div class="main">
		<?php echo $news_item['text']; ?>
	</div>
	<p><?= anchor('news/' . $news_item['slug'], 'View article') ?></p>

<?php endforeach; ?>
