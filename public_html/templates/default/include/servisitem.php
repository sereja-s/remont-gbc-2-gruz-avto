	<?php if ($this->getController() === 'index') : ?>

		<section class="benefits">
			<div class="benefits__container">
				<div class="benefits__body">
					<article class="benefits__item benefits-item">
						<h4 class="benefits-item__title"><?= $this->set['name'] ?></h4>
						<div class="benefits-item__text">
							<p><?= $this->set['keywords'] ?></p>
						</div>
						<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>" class="benefits-item__button button button--shadow"><span>Получить консультацию</span></a>
					</article>
					<article class="benefits__item benefits-item">
						<h4 class="benefits-item__title"><?= $this->set['short_content'] ?></h4>
						<div class="benefits-item__text">
							<p><?= $this->set['description'] ?></p>
						</div>
						<a href="<?= $this->alias('remontgruzauto') ?>" class="benefits-item__button button button--shadow"><span>Наши услуги</span></a>
					</article>
					<style>
					</style>
				</div>
			</div>
		</section>

	<?php elseif ($this->getController() === 'remont_gruz_auto') : ?>

		<section class="benefits">
			<div class="benefits__container">
				<div class="benefits__body">
					<article class="benefits__item benefits-item">
						<h4 class="benefits-item__title"><?= $this->set['short_content'] ?></h4>
						<div class="benefits-item__text">
							<p><?= $this->set['description'] ?></p>
						</div>
						<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_aser']) ?>" class="benefits-item__button button button--shadow"><span>Получить консультацию</span></a>
					</article>
					<article class="benefits__item benefits-item">
						<h4 class="benefits-item__title"><?= $this->set['name'] ?></h4>
						<div class="benefits-item__text">
							<p><?= $this->set['keywords'] ?></p>
						</div>
						<a href="<?= $this->alias() ?>" class="benefits-item__button button button--shadow"><span>Наши услуги</span></a>
					</article>
				</div>
			</div>
		</section>

	<?php else : ?>

		<section class="benefits">
			<div class="benefits__container">
				<div class="benefits__body">
					<article class="benefits__item benefits-item">
						<h4 class="benefits-item__title"><?= $this->set['name'] ?></h4>
						<div class="benefits-item__text">
							<p><?= $this->set['keywords'] ?></p>
						</div>
						<a href="<?= $this->alias() ?>" class="benefits-item__button button button--shadow"><span style="top: 15px;">Наши услуги</span></a>
					</article>
					<article class="benefits__item benefits-item">
						<h4 class="benefits-item__title"><?= $this->set['short_content'] ?></h4>
						<div class="benefits-item__text">
							<p><?= $this->set['description'] ?></p>
						</div>
						<a href="<?= $this->alias('remontgruzauto') ?>" class="benefits-item__button button button--shadow"><span style="top: 15px;">Наши услуги</span></a>
					</article>
				</div>
			</div>
		</section>

	<?php endif; ?>