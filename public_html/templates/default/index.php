<section class="hero">
	<div class="hero__container">
		<h1 class="hero__title"><?= $index_page['name'] ?></h1>
		<div class="hero__subtitle">
			<?= $index_page['keywords'] ?>
		</div>
		<div class="hero__form">
			<button style="font-size: 1.5rem;" type="submit" class="hero__button phone-mask-button">+7(949)334-91-01</button>
			<button style="font-size: 1.45rem; background-color: #0416ca;" type="submit" class="hero__button phone-mask-button">Связаться в телеграм</button>
		</div>
		<div style="padding-top: 20px;" class="hero__form">
			<a style="font-size: 1.45rem; background-color: #f32f18; display: flex; align-items: center;     justify-content: center;" href="<?= $this->alias('contacts') ?>" class="hero__button">Все контакты</a>
		</div>
	</div>
	<div class="hero__bg">
		<img src="<?= $this->img($index_page['img']) ?>" alt="<?= $index_page['title'] ?>">
	</div>
</section>

<?= $this->servisitem ?>

<section class="category">
	<div class="category__container">
		<h2 class="category__title title"><?= $index_page['description'] ?></h2>
		<div class="category__subtitle">Все производимые работы согласуются с заказчиком.</div>

		<?= $this->pricetable ?>

	</div>
</section>

<?php if (!empty($goods)) : ?>

	<section style="background-color: #ffffff;" class="category">
		<div class="category__container">
			<h2 class="category__title title">Работы по восстановлению и ремонту ГБЦ</h2>
			<div class="category__subtitle">Работаем по заводским допускам и мануалам.</div>

			<div class="products__items">

				<?php foreach ($goods as $item) {

					$this->showGoods($item);
				} ?>

			</div>

			<div class="category__bottom">
				<div class="category__label">Не нашли своей позиции? Свяжитесь с нами и мы уточним, что можем для вас сделать</div>
				<button data-popup=".popup-call" class="category__button button button--shadow"><span>Связаться с
						нами</span></button>
				<a href="#" class="category__link">Написать в Телеграм</a>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php if (!empty($resultsFoto)) : ?>

	<section class="gallerys">
		<div class="gallerys__container">
			<h2 class="gallerys__title title">Фото нашего оборудования и выполненных работ.
			</h2>
			<div class="gallerys__body">
				<article class="gallerys__item gallery">
					<div class="gallery__thumbs">
						<div class="gallery__slider1 gallery__slider swiper">
							<div data-gallery class="gallery__wrapper swiper-wrapper">

								<?php foreach ($resultsFoto as $item) : ?>

									<a href="<?= $this->img($item['img']) ?>" class="gallery__slide swiper-slide">
										<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
									</a>

								<?php endforeach; ?>

							</div>
							<button type="button" class="swiper-button-prev swiper-button-prev1">
								<img src="<?= PATH . TEMPLATE ?>assets/img/icons/arrow.svg" alt="Icon">
							</button>
							<button type="button" class="swiper-button-next swiper-button-next1">
								<img src="<?= PATH . TEMPLATE ?>assets/img/icons/arrow.svg" alt="Icon">
							</button>
						</div>
						<div class="mini-gallery__images mini-gallery__images1 swiper">
							<div class="mini-gallery__wrapper swiper-wrapper">

								<?php foreach ($resultsFoto as $item) : ?>

									<div class="mini-gallery__slide swiper-slide">
										<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
									</div>

								<?php endforeach; ?>

							</div>
						</div>
					</div>
					<div class="gallery__content">
						<h4 class="gallery__title"><?= $index_page['title'] ?></h4>
						<div class="gallery__text">
							<p>Высококачественные работы с использованием современного оборудования. Гарантия на все виды ремонта</p>
						</div>
						<button data-popup=".popup-call" class="gallery__button button">Получить консультацию</button>
					</div>
				</article>
			</div>
		</div>
	</section>

<?php endif; ?>