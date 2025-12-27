<!-- content-page start-->
<section class="_container contacts-page" style="margin-top: 75px;">
	<div class="container">
		<h1 class="contacts-page-main-title">Контакты</h1>

		<div class="contacts-page__wrapper">
			<div class="contacts-page__category">
				<!-- <h2 class="contacts-page__category-title">Отдел продаж</h2> -->

				<div class="contacts-page__item">
					<h3 class="contacts-page__item-title"><img class="contacts-page__item-img" src="img/icons/contacts-icon-calen.svg" alt=""><span>График работы</span></h3>

					<div class="contacts-page__item-text">
						<?= $this->set['working_time'] ?>

					</div>
				</div>

				<div class="contacts-page__item">
					<h3 class="contacts-page__item-title">
						<img class="contacts-page__item-img" src="img/icons/contacts-icon-phone.svg" alt="">
						<span>Телефон</span>
						<!-- <a href="#"><img class="contacts-page__item-img" src="<?= PATH . TEMPLATE ?>/assets/img/icons/viber.svg" alt="viber"></a>
						<a href="#"><img class="contacts-page__item-img" src="<?= PATH . TEMPLATE ?>/assets/img/icons/telegram.svg" alt="telegram"></a> -->
					</h3>
					<?php if (!empty($this->phones)) : ?>

						<ul>

							<?php foreach ($this->phones as $phone) : ?>

								<li>

									<a href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['name']) ?>" class="contacts-footer__item _icon-phone"><?= $phone['name'] ?></a>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

					<!-- <div class="contacts-page__item-text">
						<p>Для оформления заказов и консультаций: <a href="tel:+74951509555"></a></p>
					</div> -->
				</div>

				<div class="contacts-page__item">
					<h3 class="contacts-page__item-title"><img class="contacts-page__item-img" src="img/icons/contacts-icon-email.svg" alt=""><span>E-mail</span></h3>

					<?php if (!empty($this->emails)) : ?>

						<ul>

							<?php foreach ($this->emails as $email) : ?>

								<li>

									<a href="mailto:<?= $email['name'] ?>" target="_blank" class="contacts-footer__item"><?= $email['name'] ?></a>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

					<!-- <div class="contacts-page__item-text">
						<a href="mailto:info@elecity.ru"></a>
					</div> -->
				</div>

				<!-- <div class="contacts-page__item">
					<h3 class="contacts-page__item-title"><img class="contacts-page__item-img" src="img/icons/contacts-icon-invo.svg" alt=""><span></span></h3>

					<div class="contacts-page__item-text">
						<p><a href="mailto:bn@elecity.ru"></a></p>
					</div>
				</div> -->
			</div>

			<div class="contacts-page__category">
				<!-- <h2 class="contacts-page__category-title">Наш адрес</h2> -->

				<div class="contacts-page__item">
					<h3 class="contacts-page__item-title"><img class="contacts-page__item-img" src="img/icons/contacts-icon-invo.svg" alt=""><span>Наш адрес</span></h3>

					<?php if (!empty($this->address)) : ?>

						<ul>

							<?php foreach ($this->address as $adres) : ?>

								<li>

									<div class="contacts-footer__item _icon-location"><?= $adres['name'] ?></div>

								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

					<!-- <div class="contacts-page__item-text">
						<p>пн-пт: 7:00-16:00</p>
						<p>сб-вс: выходной</p>
						<p><b></b></p>
					</div> -->
				</div>

				<div class="contacts-page__item">
					<h3 class="contacts-page__item-title"><img class="contacts-page__item-img" src="img/icons/contacts-icon-phone.svg" alt=""><span>Наши соц. сети</span></h3>

					<ul class="menu-footer__list">

						<?php foreach ($this->socials as $item) : ?>

							<li><a href="<?= $this->alias($item['external_alias']) ?>" class="menu-footer__link"><?= $item['name'] ?> <!-- <img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>"> --></a></li>

						<?php endforeach; ?>

						<!-- <li><a href="" class="menu-footer__link">Instagram</a></li> -->

					</ul>

					<!-- <div class="contacts-page__item-text">
						<p>Для обращений по рекламации и гарантийным вопросам <a href="tel:+74951509555"></a></p>
					</div> -->
				</div>

				<!-- <div class="contacts-page__item">
					<h3 class="contacts-page__item-title"><img class="contacts-page__item-img" src="img/icons/contacts-icon-email.svg" alt=""><span>E-mail</span></h3>

					<div class="contacts-page__item-text">
						<a href="mailto:info@elecity.ru"></a>
					</div>
				</div> -->
			</div>
		</div>

		<!-- <h3 class="h3-title contacts-page__form-title">Оставить обращение</h3>
		<div class="contacts-page__form">
			<div class="contacts-page__form-item">
				<label class="contacts-page__form-label">ФИО</label>
				<input class="contacts-page__form-text" type="text">
			</div>

			<div class="contacts-page__form-item">
				<label class="contacts-page__form-label">Телефон</label>
				<input class="contacts-page__form-text" type="text">
			</div>

			<div class="contacts-page__form-item">
				<label class="contacts-page__form-label">Email</label>
				<input class="contacts-page__form-text" type="email">
			</div>

			<div class="contacts-page__form-item">
				<label class="contacts-page__form-label">Выберите отдел</label>
				<input class="contacts-page__form-text" type="text">
			</div>

			<div class="contacts-page__form-item contacts-page__col-3">
				<label class="contacts-page__form-label">Ваше сообщение</label>
				<textarea class="contacts-page__form-textarea"></textarea>
			</div>

			<div class="contacts-page__form-item">
				<button class="contacts-page__form-submit" type="submit">Отправить</button>
			</div>
		</div> -->
	</div>
</section>
<!-- content-page end -->



</body>

</html>