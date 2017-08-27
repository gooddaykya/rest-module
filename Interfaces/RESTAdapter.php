<?php
	namespace REST\Interfaces;

	interface RESTAdapter
	{
		public function __construct();
		public function configure();
		public function execute();
		public function getResponse();
	}
