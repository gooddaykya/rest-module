<?php
	namespace REST\Interfaces;

	interface RESTModelAdapter
	{
		public function get(int $id = null);
		public function put(int $id = null, array $params);
		public function post(array $params);
		public function del(int $id = null);
	}
