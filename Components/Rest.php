<?php
	namespace REST\Components;

	abstract class Rest implements \REST\Interfaces\RESTAdapter
	{
		protected $model;
		protected $conf;
		protected $result;

		public function __construct(\REST\Interfaces\RESTModel $model,
									\REST\Components\Configurator $conf)
		{
			$this->model = $model;
			$this->conf  = $conf;
		}

		public function getResponse()
		{
			return $this->result;
		}
		
		public abstract function execute();
	}
