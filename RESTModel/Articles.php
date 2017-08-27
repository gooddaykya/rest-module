<?php
	namespace REST\RESTModel;

	class Articles implements \REST\Interfaces\RESTModelAdapter
	{
		public function __construct()
		{
		}

		public function get(int $id = null)
		{
			if (!is_null($id))
				return "Article number $id";
			return "All articles";
		}

		public function put(int $id = null, array $params = null)
		{
			if (is_null($id)) {
				return $this->post($params);
			} else {
				return "putting into $id next params: " . implode(', ', $params);
			}
		}

		public function post(array $params = null)
		{
			if (is_null($params))
				throw new \Exception('RESTModel :  no params specified' . PHP_EOL);
			else
				return 'posting new article with params: ' . implode(', ', $params);
		}

		public function del(int $id = null)
		{
			if (is_null($id))
				return "removing article number $id";
			else
				return "removing all articles";
		}
	}
