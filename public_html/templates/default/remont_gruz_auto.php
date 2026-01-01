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
							<p>
								Некоторые виды ремонта двигателей грузовых автомобилей: <br>
								- Текущий ремонт — устранение незначительных неисправностей, снятие двигателя из моторного отсека не требуется.<br>
								- Капитальный ремонт — комплекс работ, направленных на восстановление работоспособности и характеристик двигателя до уровня, близкого к новому. Включает разборку, очистку, проверку всех составляющих, замену изношенных деталей и их сборку.
							</p>

						</div>
					</details>

				<?php endforeach; ?>

				<details class="spollers__item">
					<summary class="spollers__title"><span>Ремонт АКПП, КПП, редукторов, ГУР</span></summary>
					<div class="spollers__body">
						<p>
							Мы производим широкий ассортимент изделий: женская одежда из текстиля, одежду из трикотажа,
							толстовки, худи, футболки; униформу для ваших сотрудников, корпоративную одежду и многое
							другое
						</p>
					</div>
				</details>
				<details class="spollers__item">
					<summary class="spollers__title"><span>Ремонт ходовой части автомобилей, прицепов, полуприцепов BPW, SAF</span></summary>
					<div class="spollers__body">
						<p>
							Мощность при полной загрузке до 80 000 ед./мес.
						</p>
					</div>
				</details>
				<details class="spollers__item">
					<summary class="spollers__title"><span>Компьютерная диагностика</span></summary>
					<div class="spollers__body">
						<p>
							Сроки изготовления к каждому заказу рассчитываются индивидуально, все зависит от объёма
							работ. При необходимости выполняем срочные заказы.
						</p>
					</div>
				</details>
				<details class="spollers__item">
					<summary class="spollers__title"><span>Прошивка блоков управления</span></summary>
					<div class="spollers__body">
						<p>
							Сроки изготовления к каждому заказу рассчитываются индивидуально, все зависит от объёма
							работ. При необходимости выполняем срочные заказы.
						</p>
					</div>
				</details>
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