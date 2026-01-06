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

		$data = [];

		$data['name'] = $index_page['name'];
		$data['title'] = $index_page['title'];

		// собираем переменные в массив и возвращаем в шаблон, что бы они стали доступными при выводе
		return compact('index_page', 'goods', 'resultsFoto', 'data');
	}
}
