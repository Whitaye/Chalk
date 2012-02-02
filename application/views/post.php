<div id="content">
		<h2><a href=""><?php echo $post['title'] ?></a></h2>
		<span class="post-meta date"><?php echo date('F j, Y', strtotime($post['published'])) ?></span>
		<span class="post-meta comments">0 comments</span>
		<div class="clear"></div>
		<div id="post-wrapper">
			<?php echo $post['body'] ?>
		</div>
		<h3>Comments</h3>
		<form action="/comment" method="post" id="comment-form">
			<p>
				<label for="name">Name</label>
				<input type="text" name="name" />
			</p>
			<p>
				<label for="email">Email</label>
				<input type="text" name="email" />
			</p>
			<p>
				<label for="Comment">Comment</label>
				<textarea name="comment"></textarea>
			</p>
		</form>
</div>