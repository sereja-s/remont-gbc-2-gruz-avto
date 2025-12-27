<section class="page__rooms rooms">
	<div class="rooms__container _container">
		<div class="rooms__body">
			<h2 class="rooms__title _title"><?= $this->set['name'] ?></h2>
			<div class="rooms__text"><?= $this->set['description'] ?></div>
			<!-- <a href="" class="rooms__button btn">Explore More</a> -->
		</div>
		<div class="rooms__slider slider-rooms">
			<div class="slider-rooms__body _swiper">

				<?php if (!empty($sales)) : ?>

					<?php foreach ($sales as $item) : ?>

						<div class="slider-rooms__slide">
							<div class="slider-rooms__image _ibg">

								<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">

							</div>
							<div data-swiper-parallax-opacity="0" data-swiper-parallax-y="-100%" class="slider-rooms__content _icon-arrow-link">
								<div class="slider-rooms__label label-slider">
									<!-- <div class="label-slider__number"><?= $item['id'] ?></div>
									<div class="label-slider__line"></div> -->
									<div class="label-slider__text"><?= $item['short_content'] ?></div>
								</div>
								<div class="slider-rooms__title"><?= $item['name'] ?></div>
							</div>
						</div>

					<?php endforeach; ?>

				<?php endif; ?>

			</div>

			<div class="slider-rooms__dotts"></div>
		</div>
	</div>
</section>

<?php if (!empty($advantages)) : ?>

	<section class="page__advantages advantages">
		<div class="advantages__container _container">

			<?php foreach ($advantages as $item) : ?>

				<div class="advantages__item">
					<div class="advantages__icon">

						<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">

					</div>
					<h3 class="advantages__title"><?= $item['name'] ?></h3>
					<div class="advantages__text"><?= $item['short_content'] ?></div>
				</div>

			<?php endforeach; ?>

		</div>
	</section>

<?php endif; ?>


<section class="_container">

	<div class="furniture__label">Стоимость предоставляемых услуг</div>

	<h2 class="furniture__title _title">Правильный ремонт двигателя в VSmotor</h2>

	<?= $this->pricetable ?>

</section>



<?php if (!empty($goods)) : ?>

	<section class="page__products products">
		<div class="products__container _container">

			<h2 class="products__title _title">Ремонт и восстановление головок блоков цилиндров</h2>
			<div class="products__items">

				<?php foreach ($goods as $item) {

					$this->showGoods($item);
				} ?>

			</div>




		</div>
	</section>

<?php endif; ?>

<?php if (!empty($resultsFoto)) : ?>

	<section class="page__tips tips">
		<div class="tips__container _container">
			<h2 class="tips__title _title">Результаты нашей работы</h2>
			<div class="tips__slider slider-tips">
				<div class="slider-tips__body _swiper">

					<?php foreach ($resultsFoto as $item) : ?>

						<div class="slider-tips__slide">
							<a href="" class="slider-tips__image _ibg">
								<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
								<!-- <picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/tips/02.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/tips/02.jpg" alt="Solution for clean look working space">
							</picture> -->
							</a>
							<div class="slider-tips__content">
								<a href="" class="slider-tips__title"><?= $item['name'] ?></a>
								<div class="slider-tips__text" style="font-size: medium;"><?= $item['short_content'] ?></div>
								<div class="slider-tips__text" style="color: teal;"><?= $item['date'] ?></div>
							</div>
						</div>

					<?php endforeach; ?>

				</div>
				<div class="slider-tips__dotts"></div>
				<div class="slider-tips__arrows slider-arrows">
					<button type="button" class="slider-arrow slider-arrow_white slider-arrow_prev _icon-arrow-down"></button>
					<button type="button" class="slider-arrow slider-arrow_white slider-arrow_next _icon-arrow-down"></button>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>

<!-- <section class="page__furniture furniture">
	<div class="furniture__container">
		<div class="furniture__label">Share your setup with</div>
		<h2 class="furniture__title _title">#FuniroFurniture</h2>
		<div data-speed="0.01" class="furniture__body">
			<div class="furniture__items _gallery">
				<div class="furniture__column">
					<div class="furniture__row row-furniture row-furniture_left-top">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/09.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/01.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/02.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/02.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/02.jpg" alt="Image">
							</picture>
						</a>
					</div>
					<div class="furniture__row row-furniture row-furniture_left-bottom">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/04.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/06.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/07.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/07.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/07.jpg" alt="Image">
							</picture>
						</a>
					</div>
				</div>
				<div class="furniture__column">
					<div class="furniture__row row-furniture row-furniture_center">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/03.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/03.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/03.jpg" alt="Image">
							</picture>
						</a>
					</div>
				</div>
				<div class="furniture__column">
					<div class="furniture__row row-furniture row-furniture_right-top">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/04.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/04.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/05.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/05.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/05.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/01.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/01.jpg" alt="Image">
							</picture>
						</a>
					</div>
					<div class="furniture__row row-furniture row-furniture_right-bottom">
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/08.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/08.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/08.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/09.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/09.jpg" alt="Image">
							</picture>
						</a>
						<a href="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" class="row-furniture__item">
							<picture>
								<source srcset="<?= PATH . TEMPLATE ?>assets/img/furniture/06.webp" type="image/webp"><img src="<?= PATH . TEMPLATE ?>assets/img/furniture/06.jpg" alt="Image">
							</picture>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->