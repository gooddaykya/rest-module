<?php
	namespace REST\Components;
	use \REST\Components\Rest;

	class RestFactory
	{
		public static function create(\REST\Interfaces\RESTModelAdapter $model,
									  int $id = null,
									  array $body = null)
		{
			$conf = new \REST\Components\Configurator($id, $body);
			$rest = null;

			$method = $_SERVER['REQUEST_METHOD'];

			switch ($method)
			{
				case 'GET':
					$rest = new Rest\GET($model, $conf);
					break;

				case 'PUT':
					$rest = new Rest\PUT($model, $conf);
					break;

				case 'POST':
					$rest = new Rest\POST($model, $conf);
					break;

				case 'DELETE':
					$rest = new Rest\DELETE($model, $conf);
					break;

				default:
					throw new \Exception('REST Factory :  undefined method used' . PHP_EOL);
			}

			return $rest;
		}
	}
