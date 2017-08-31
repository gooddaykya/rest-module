<?php
	namespace REST\Components;

	abstract class Rest implements \REST\Interfaces\RESTAdapter
	{
		protected $model;
		protected $conf;
		protected $result;

		public function __construct(\REST\Interfaces\RESTModelAdapter $model,
									\REST\Components\Configurator $conf)
		{
			$this->model = $model;
			$this->conf  = $conf;
		}

		public function getResponse()
		{
			return json_encode($this->result);
		}
		
		public abstract function execute();
	}
