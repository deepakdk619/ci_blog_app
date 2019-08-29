<div class="container mt-5 mb-5">
	<?php $this->load->view('flash_messages') ?>  <!-- Load Flash Messages --> 
	
	<h3>Latest Posts</h3>

	<?php foreach($posts as $post) : ?>

	<div class="post row">
		<div class="card-head col-3">
			<img
				src="<?= base_url('assets/images/posts/'.$post['image']) ?>"
				class="w-100 mt-5 mb-5"
				alt=""
			/>
		</div>
		<div class="card-body col-9">
			<h4 class="card-title"><?= ucfirst($post['title']) ?></h4>
			<h6 class="card-subtitle mb-2 text-muted">
				<b><?= $post['name'] ?></b>
				<?= str_repeat('&nbsp;', 5); ?>  <!-- adding white-spaces 5 times -->
				<em><?= date('d/M/Y', strtotime($post['created_at'])) ?></em>
			</h6>
			<p class="card-text"><?= word_limiter($post['body'], 25) ?></p>
			<a href="<?= base_url('posts/'.$post['id']) ?>" class="btn btn-primary"
				>Read more </a
			>
		</div>
	</div>
	<?php endforeach; ?>
</div>
