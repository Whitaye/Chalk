<div id="content">
	<ul id="post-list">
	<?php foreach($posts as $post): ?>
		<li>
			<h2><a href="<?php echo $post['clean_title'] ?>"><?php echo $post['title'] ?></a></h2>
			<span class="post-meta date"><?php echo date('F j, Y', strtotime($post['published'])) ?></span>
			<span class="post-meta comments">0 comments</span>
			<p class="post-body"><?php echo word_limiter($post['body'], 50) ?></p>
		</li>
	<?php endforeach; ?>
	</ul>
</div>