<?php
	namespace REST\Interfaces;

	interface RESTAdapter
	{
		public function execute();
		public function getResponse();
	}
