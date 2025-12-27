<div class="_container">

	<?php if (!empty($this->menu['information-bottom'])) : ?>

		<?php foreach ($this->menu['information-bottom'] as $item) : ?>

			<?php if ($item['alias'] === ($this->parameters['alias'])) : ?>

				<h1 style="margin-top: 100px;" class="products__title _title"><?= $item['name'] ?></h1>

				<section style="margin-bottom: 35px;" class="catalog-internal">

					<?= $item['content'] ?>

				</section>

				<div class="furniture__label">Стоимость предоставляемых услуг</div>

				<?= $this->pricetable ?>

			<?php endif; ?>

		<?php endforeach; ?>

	<?php endif; ?>
</div>