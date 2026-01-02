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

		<?php if (!empty($this->menu['information-bottom'])) : ?>

			<h5 class="category__title title">Информация</h5>
			<ul>
				<?php foreach ($this->menu['information-bottom'] as $item) : ?>
					<li style="display: flex;">
						<a style="margin-bottom: 1rem;" class="category__subtitle" href="<?= $this->alias(['information' => $item['alias']]) ?>">
							<?= $item['name'] ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>

		<?php endif; ?>

		<!-- <button style="margin-top: 1rem;" data-popup=".popup-call" type="submit" class="footer__button button button--shadow"><span>Получить консультацию</span></button> -->
		<div class="footer__confedential">Данный сайт носит исключительно информационный характер и ни при каких обстоятельствах не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ. Цены на услуги могут меняться. Получить консультацию, уточнить актуальную стоимость услуг, записаться на проведение ремонта можно у нашего специалиста по указанным контактам.</div>
		<a href="" class="footer__confedential">Сделано в <span style="color: darkorange;">САЙТ ПОСТРОЕН</span></a>
	</div>
</footer>

<script>
	var ForJS = {};
	/* укажем для описания полного пути к маркеру(картинки-лого) на карте */
	/* Остальное описано в main.js  */

	ForJS.imgMap = '<?= $this->img($this->set['main_img']) ?>';
</script>

<?php $this->getScripts() ?>

</body>

</html>