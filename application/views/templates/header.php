<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title><?= $title ?></title>
		<link
			href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf"
			crossorigin="anonymous"
		/>
		<link href=
		<?= base_url("assets/css/style.css") ?>
		rel="stylesheet" type="text/css"/>
		<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
			<a class="navbar-brand" href="<?= base_url() ?>">CodeIgniter-App</a>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbarColor01"
				aria-controls="navbarColor01"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?= $title==='Home' ? 'active' : '' ?>">
						<a class="nav-link" href="<?= base_url() ?>"
							>Home <span class="sr-only">(current)</span></a
						>
					</li>
					<li class="nav-item <?= $title==='About' ? 'active' : '' ?>">
						<a class="nav-link" href="<?= base_url() ?>about">About</a>
					</li>
					<li class="nav-item <?= $title==='About' ? 'active' : '' ?>">
						<a class="nav-link" href="<?= base_url() ?>posts">Blog</a>
					</li>
				</ul>
				<ul class="navbar-nav navbar-right">
          <?php if($this->session->userdata('logged_in')) { ?>

            <li class="nav-item <?= $title==='Create Post' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url() ?>posts/create"
                >Create Post<span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>users/login"
                ><?= $this->session->userdata('name') ?><span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>users/logout"
                >Logout<span class="sr-only">(current)</span></a
              >
            </li>

          <?php } else { ?>

            <li class="nav-item <?= $title==='Login' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url() ?>users/login"
                >Login<span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item <?= $title==='Register' ? 'active' : '' ?>">
              <a class="nav-link" href="<?= base_url() ?>users/register"
                >Create Account<span class="sr-only">(current)</span></a
              >
            </li>

          <?php } ?>
				</ul>
			</div>
		</nav>
	</body>
</html>
