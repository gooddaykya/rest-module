<?php
	namespace REST\Interfaces;

	interface RESTAdapter
	{
		public function __construct(\REST\Interfaces\RESTModelAdapter $model, 
									\REST\Components\Configurator $conf);
		public function execute();
		public function getResponse();
	}
