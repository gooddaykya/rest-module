<?php
	namespace REST\RESTModel;

	class Articles implements \REST\Interfaces\RESTModelAdapter
	{
		public function __construct()
		{
		}

		public function get(int $id = null)
		{
			if (is_null($id))
				return "Article number $id";
			return "All articles";
		}

		public function put(int $id, array $params)
		{
			if (is_null($id)) {
				throw new \Exception('Model :  no id specified for put' . PHP_EOL);
			} else {
				return "putting into $id next params: " . implode(', ', $params);
			}
		}

		public function post(array $params)
		{
			return 'posting new article with params: ' . implode(', ', $params);
		}

		public function del(int $id)
		{
			if (is_null($id))
				return "removing article number $id";
			else
				return "removing all articles";
		}
	}
