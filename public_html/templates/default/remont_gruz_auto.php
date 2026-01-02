<section class="hero">
	<div class="hero__container">
		<h1 class="hero__title"><?= $autoservis_page['name'] ?></h1>
		<div class="hero__subtitle">
			<?= $autoservis_page['keywords'] ?>
		</div>
		<div class="hero__form">
			<button style="font-size: 1.5rem;" type="submit" class="hero__button phone-mask-button">+7(949)327-32-02</button>
			<button style="font-size: 1.45rem; background-color: #0416ca;" type="submit" class="hero__button phone-mask-button">Связаться в телеграм</button>
		</div>
		<div style="padding-top: 20px;" class="hero__form">
			<a style="font-size: 1.45rem; background-color: #f32f18; display: flex; align-items: center;     justify-content: center;" href="<?= $this->alias('contacts') ?>" class="hero__button">Все контакты</a>
		</div>
	</div>
	<div class="hero__bg">
		<img src="<?= $this->img($autoservis_page['img']) ?>" alt="<?= $autoservis_page['name'] ?>">
	</div>
</section>

<?= $this->servisitem ?>

<?php if (!empty($questions)) : ?>

	<section class="question">
		<div class="question__container">
			<h2 class="question__title title">Услуги, производимые нашей командой</h2>
			<div data-spollers class="question__spollers spollers">

				<?php foreach ($questions as $item) : ?>

					<details class="spollers__item">
						<summary class="spollers__title"><span><?= $item['name'] ?></span></summary>
						<div class="spollers__body">
							<?= $item['content'] ?>
						</div>
					</details>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

<?php endif; ?>

<section class="category">
	<div class="category__container">
		<h2 class="category__title title"><?= $autoservis_page['short_content'] ?></h2>
		<div class="category__subtitle">
			<?= $autoservis_page['content'] ?>
		</div>
	</div>
</section>