</main>
<footer class="footer">
	<div class="footer__container">
		<div class="footer__body">
			<div class="footer__contacts footer-contacts">
				<div class="footer-contacts__social">
					<a href="#" class="footer-contacts__whatsapp"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/whatsapp.svg" alt="Icon"></a>
					<a href="#" class="footer-contacts__telegram"><img src="<?= PATH . TEMPLATE ?>assets/img/icons/telegram.svg" alt="Icon"></a>
				</div>
				<div class="footer-contacts__links">
					<a href="tel:+79300359492" class="footer-contacts__tel"><span>Ремонт ГБЦ</span><br>+7(949)334-91-01</a>
					<a href="tel:+79300359492" class="footer-contacts__tel"><span>Автосервис</span><br>+7(949)327-32-02</a>
					<a href="tel:+79300359492" class="footer-contacts__tel"><span>Автозапчасти</span><br>+7(949)513-90-00</a>
					<a href="mailto:" class="footer-contacts__email">Ignatenko_k_a@mail.ru</a>
				</div>
			</div>
			<div class="footer__info footer-info">
				<div class="footer-info__logo">
					<picture>
						<img src="<?= PATH . TEMPLATE ?>assets/img/Лого- траксервис-тёмный-с фоном -мин.jpg" alt="Logo">
					</picture>
				</div>
				<div class="footer-info__text">Ремонт грузовых авто, прицепов, полуприцепов, ремонт ГБЦ в Донецке ДНР</div>
			</div>

			<div class="footer__address footer-address">
				<div class="footer-address__icon">
					<picture>
						<img src="<?= PATH . TEMPLATE ?>assets/img/icons/location.png" alt="Icon">
					</picture>
				</div>
				<div class="footer-address__text">ДНР, г. Донецк, ул. Чемпионная, 80 (АТП 0513)</div>
			</div>

		</div>
		<h2 class="category__title title">Информация</h2>
		<div class="category__subtitle">Реквизиты</div>

		<button data-popup=".popup-call" type="submit" class="footer__button button button--shadow"><span>Получить консультацию</span></button>
		<a href="" class="footer__confedential">Политика конфиденциальности</a>
	</div>
</footer>

<?php $this->getScripts() ?>

</body>

</html>