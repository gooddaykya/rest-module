<?php
	namespace REST\Components;
	use \REST\Components\Rest;

	class RestFactory
	{
		public static function create(\REST\Interfaces\RESTModelAdapter $model,
									  int $id = null,
									  array $body = null)
		{
			$rest = null;

			$method = $_SERVER['REQUEST_METHOD'];

			switch ($method)
			{
				case 'GET':
					$rest = new Rest\GET($model, $id);
					break;

				case 'PUT':
					$rest = new Rest\PUT($model, $id, $body);
					break;

				case 'POST':
					$rest = new Rest\POST($model, $body);
					break;

				case 'DELETE':
					$rest = new Rest\DELETE($model, $id);
					break;

				default:
					throw new \Exception('REST Factory :  undefined method used' . PHP_EOL);
			}

			return $rest;
		}
	}
