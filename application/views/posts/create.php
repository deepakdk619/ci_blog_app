<div class="container mt-5">
	<h3><?= $title ?></h3>
	<?= form_open_multipart('posts/create'); ?>
	<fieldset>
		<div class="form-group">
			<label for="post_title">Title</label>
			<input
				class="form-control <?php echo form_error('title') ? 'is-invalid' : '' ?>"
				name="title"
				id="post_title"
				placeholder="Add title"
			/>
			<div class="invalid-feedback"><?= form_error('title') ?></div>
		</div>
		<div class="form-group">
			<label for="post_body">Body</label>
			<textarea
				class="form-control <?php echo form_error('body') ? 'is-invalid' : '' ?>"
				name="body"
				id="post_body"
				placeholder="Add body"
				rows="3"
			></textarea>
			<div class="invalid-feedback"><?= form_error('body') ?></div>
		</div>
		<div class="form-group">
			<label for="post_image">Upload Image</label>
			<input
				type="file"
				name="userfile"
				class="form-control-file"
				id="post_image"
				aria-describedby="fileHelp"
			/>
		</div>
		<button type="submit" class="btn btn-primary" name="post_form_submit">Submit</button>
	</fieldset>
	<?= form_close() ?>
</div>
