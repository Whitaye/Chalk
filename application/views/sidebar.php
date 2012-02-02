<div id="sidebar">
	<form action="/search" method="get" id="search-form">
		<input type="text" placeholder="Search..." name="s">
	</form>
	<h3>Tags</h3>
	<ul id="tag-list">
	<?php foreach($tags as $tag): ?>
		<li><a href="<?php echo $tag['slug'] ?>"><?php echo $tag['name'] ?></a></li>
	<?php endforeach; ?>
	</ul>
</div>