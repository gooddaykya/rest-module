<?php
	namespace REST\Interfaces;

	interface RESTModelAdapter
	{
		public function get();
		public function put();
		public function post();
		public function del();
	}
