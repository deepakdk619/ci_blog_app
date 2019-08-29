<div class="container">
	<?php if($this->session->flashdata('post_updated')) : ?>
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Well done!</strong>
		<?= $this->session->flashdata('post_updated') ?>
	</div>
	<?php endif ?>
	<div class="card mb-5 mt-5 w-90 mr-auto ml-auto border-0">
  <em class="px-3 pt-3 text-muted"><?= date('d/M/Y', strtotime($post['created_at'])) ?></em>
		<h1 class="px-3"><?= ucfirst($post['title']) ?></h1>
		<div class="card-body">
			<h6 class="card-subtitle text-muted">
				<b><?= $post['name'] ?></b>
				<?= str_repeat('&nbsp;', 5); ?>  <!-- adding white-spaces 5 times -->
				
			</h6>
		</div>
		<img
			style="width: 100%; display: block;"
			src="<?= base_url('assets/images/posts/'.$post['image']) ?>"
			alt="Card image"
      class="px-3"
		/>
		<div class="card-body">
			<p class="card-text"><?= $post['body'] ?></p>
			<?php if($this->session->userdata('logged_in') && $post['user_id'] ===
			$this->session->userdata('id')) : ?>
			<a
				href="<?= base_url() ?>posts/edit/<?= $post['id'] ?>"
				class="btn btn-outline-info float-left mr-2"
				>Edit</a
			>
			<?= form_open('posts/delete/'.$post['id']); ?>
			<button type="submit" class="btn btn-outline-danger">Delete</button>
			<?= form_close() ?>
			<?php endif ?>
		</div>
	</div>
</div>
