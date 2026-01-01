<?php

namespace core\user\controller;

/** 
 * Индексный контроллер пользовательской части
 */
class IndexController extends BaseUser
{
	protected $name;

	protected function inputData()
	{
		// Выпуск №120
		parent::inputData();

		$index_page = $this->model->get('index_page', [
			'order' => ['id'],
			'limit' => 1
		]);

		$index_page && $index_page = $index_page[0];

		// Выпуск №124- Пользовательская часть | вывод акций (слайдер под верхним меню)
		/* $sales = $this->model->get('sales', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]); */

		// Выпуск №128 - массив преимуществ
		/* $advantages = $this->model->get('advantages', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
		]);
 */
		// процессы
		$goods = $this->model->get('goods', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
		]);

		$resultsFoto = $this->model->get('results_foto', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
			'limit' => 20
		]);

		// собираем переменные в массив и возвращаем в шаблон, что бы они стали доступными при выводе
		return compact('index_page', 'goods', 'resultsFoto');
	}
}
