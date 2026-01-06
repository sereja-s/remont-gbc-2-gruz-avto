<?php

namespace core\user\controller;

use core\admin\model\Model;
use core\base\controller\BaseController;


class RemontgruzautoController extends BaseUser
{

	protected function inputData()
	{
		// Выпуск №120
		parent::inputData();

		$autoservis_page = $this->model->get('autoservis_page', [
			'order' => ['id'],
			'limit' => 1
		]);

		$autoservis_page && $autoservis_page = $autoservis_page[0];

		$questions = $this->model->get('questions', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]);

		$data = [];

		$data['name'] = $autoservis_page['name'];
		$data['title'] = $autoservis_page['title'];

		// собираем переменные в массив и возвращаем в шаблон, что бы они стали доступными при выводе
		return compact('autoservis_page', 'questions', 'data');
	}
}
