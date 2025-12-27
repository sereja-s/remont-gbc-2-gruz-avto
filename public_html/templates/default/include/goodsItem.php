<!-- карточка товара -->

<?php if (!empty($data)) : ?>

	<article class="products__item item-product">

		<div class="item-product__image _ibg">
			<img src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>">
		</div>

		<div class="item-product__body">
			<div class="item-product__content">
				<h3 class="item-product__title"><?= $data['name'] ?></h3>
				<div class="item-product__text" style="color: teal;"><?= $data['short_content'] ?></div>
				<div class="item-product__text"><?= $data['content'] ?></div>

			</div>
	</article>

<?php endif; ?>