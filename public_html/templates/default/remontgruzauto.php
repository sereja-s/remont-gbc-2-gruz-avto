<section class="hero">
	<div class="hero__container">
		<h1 class="hero__title"><?= $autoservis_page['name'] ?></h1>
		<div class="hero__subtitle">
			<?= $autoservis_page['keywords'] ?>
		</div>
		<div class="hero__form">
			<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_aser']) ?>" class="hero__button top-button"><?= $this->set['phone_aser'] ?></a>
			<a href="<?= $this->set['telegram_aser'] ?>" style="background-color: #0416ca;" class="hero__button top-button">Связаться в телеграм</a>
		</div>
		<div style="padding-top: 20px;" class="hero__form">
			<a href="<?= $this->alias('contacts') ?>" style="background-color: #f32f18;" class="hero__button top-button">Все контакты</a>
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