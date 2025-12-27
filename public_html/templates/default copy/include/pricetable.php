<?php if (!empty($this->priceTable)) : ?>

	<table id="table">
		<tr>
			<th>№</th>
			<th>Наименование услуг</th>
			<th>Цена (легковые до 16 кг.), руб.</th>
			<th>Цена (грузовые, спец.), руб.</th>
		</tr>

		<?php foreach ($this->priceTable as $item) : ?>

			<tr>
				<td><?= $item['number'] ?></td>
				<td><?= $item['name'] ?></td>
				<td><?= $item['price_auto'] ?></td>
				<td><?= $item['price_gruzauto'] ?></td>
			</tr>

		<?php endforeach; ?>

	</table>

<?php endif; ?>