<?php
	namespace REST\Components;

	abstract class Rest implements \REST\Interfaces\RESTAdaper
	{
		public abstract function configure();
		public abstract function execute();
		public abstract function getResponse();
	}
