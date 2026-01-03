</main>
<footer class="footer">
	<div class="footer__container">
		<div class="footer__body">
			<div class="footer__contacts footer-contacts">
				<div class="footer-contacts__links">
					<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>" class="footer-contacts__tel"><span>Ремонт ГБЦ</span><br><?= $this->set['phone'] ?></a>
					<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_aser']) ?>" class="footer-contacts__tel"><span>Автосервис</span><br><?= $this->set['phone_aser'] ?></a>
					<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_azap']) ?>" class="footer-contacts__tel"><span>Автозапчасти</span><br><?= $this->set['phone_azap'] ?></a>
					<a href="mailto:<?= $this->set['email'] ?>" class="footer-contacts__email"><?= $this->set['email'] ?></a>
				</div>
			</div>
			<div class="footer__info footer-info">
				<div class="footer-info__logo">
					<img src="<?= $this->img($this->set['main_img']) ?>" alt="<?= $this->set['sub_title'] ?>">
				</div>
				<div class="footer-info__text"><?= $this->set['sub_title'] ?></div>
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

		<div class="footer__confedential">Данный сайт носит исключительно информационный характер и ни при каких обстоятельствах не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ. Цены на услуги могут меняться. Получить консультацию, уточнить актуальную стоимость услуг, записаться на проведение ремонта можно у нашего специалиста по указанным контактам.</div>
		<div class="footer__confedential">© <?= date('Y') ?></div>
		<a href="<?= $this->set['external_alias'] ?>" class="footer__confedential">Сделано в <span style="color: darkorange;">САЙТ ПОСТРОЕН</span></a>
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