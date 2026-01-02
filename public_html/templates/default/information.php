<?php if (!empty($data)) : ?>

	<section class="hero">
		<div class="hero__container">
			<h1 class="hero__title"><?= $data['name'] ?></h1>
		</div>
		<div class="hero__bg">
			<img src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
		</div>
	</section>
	<section class="category">
		<div class="category__container">
			<h2 class="category__title title"><?= $data['name'] ?></h2>
			<div class="category__subtitle">
				<?= $data['content'] ?>
			</div>
		</div>
	</section>

	<?= $this->servisitem ?>

<?php endif; ?>