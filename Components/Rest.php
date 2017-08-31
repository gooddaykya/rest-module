<?php
	namespace REST\Components;

	abstract class Rest implements \REST\Interfaces\RESTAdapter
	{
		protected $result;

		public function getResponse()
		{
			return $this->result;
		}
		
		public abstract function execute();
	}
