<?php
	namespace REST\Interfaces;

	interface RESTAdapter
	{
		public function __construct(\REST\Interfaces\RESTModel $model, 
									\REST\Components\Configurator $conf);
		public function execute();
		public function getResponse();
	}
