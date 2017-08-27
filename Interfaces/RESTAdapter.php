<?php
	namespace REST\Interfaces;

	interface RESTAdapter
	{
		public function __construct(RESTModel $model, $configurator);
		public function execute();
		public function getResponse();
	}
