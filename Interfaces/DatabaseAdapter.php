<?php
	namespace REST\Interfaces;

	interface DatabaseAdapter
	{
		public function __construct(\REST\Configuration\Requisites $req);
		public function connect();
		public function disconnect();
		public function getQuery(string $request,
								 array  $params = array(),
								 string $requestType);
	}
