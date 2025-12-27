<section class="hero">
	<div class="hero__container">
		<h1 class="hero__title">Диагностика и ремонт головки блока цилиндров (ГБЦ) в Донецке ДНР</h1>
		<div class="hero__subtitle">
			Профессиональный ремонт и восстановление ГБЦ ДВС. Высококачественные работы с использованием современного оборудования. Гарантия на все виды ремонта!
		</div>
		<div class="hero__form">
			<button style="font-size: 1.5rem;" type="submit" class="hero__button phone-mask-button">+7(949)334-91-01</button>
			<button style="font-size: 1.45rem; background-color: #0416ca;" type="submit" class="hero__button phone-mask-button">Связаться в телеграм</button>
		</div>
	</div>
	<div class="hero__bg">
		<picture><img src="<?= PATH . TEMPLATE ?>assets/img/hero/гбц-2-мин.jpg" alt="Image"></picture>
	</div>
</section>
<section class="benefits">
	<div class="benefits__container">
		<!-- <h2 class="benefits__title title">На базе нашего сервиса, мы выполняем ремонт и восстановление головок блока цилиндров</h2> -->
		<div class="benefits__body">
			<article class="benefits__item benefits-item">
				<h4 class="benefits-item__title">Ремонт и восстановление головок блока цилиндров (ГБЦ) Донецк ДНР</h4>
				<div class="benefits-item__text">
					<p>На базе нашего сервиса, мы выполняем ремонт и восстановление головок блоков цилиндров любой сложности на профессиональном и современном оборудовании</p>
				</div>
				<button data-popup=".popup-call" class="benefits-item__button button button--shadow"><span>Получить консультацию</span></button>

			</article>
			<article class="benefits__item benefits-item">
				<h4 class="benefits-item__title">Комплексный ремонт и обслуживание грузовых автомобилей, прицепов и полуприцепов Донецк ДНР</h4>
				<div class="benefits-item__text">
					<p>Наша мастерская выполняет комплексный ремонт и обслуживание грузовых автомобилей, прицепов и полуприцепов в г. Донецке. Мы обслуживаем технику европейских производителей таких как: DAF, Renault, VOLVO, Schmitz, KRone</p>
				</div>

				<a href="<?= $this->alias('remontgruzauto') ?>" class="benefits-item__button button button--shadow"><span style="top: 12px;">Наши услуги</span></a>



			</article>
		</div>
	</div>
</section>

<section class="category">
	<div class="category__container">
		<h2 class="category__title title">Восстановление и ремонт головок блока цилиндров любой сложности на профессиональном и современном оборудованиии.</h2>
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
						<h4 class="gallery__title">Ремонт и восстановление ГБЦ и грузовых авто европейских марок, прицепов, полуприцепов в Донецке</h4>
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