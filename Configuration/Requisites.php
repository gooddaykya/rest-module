<?php
	namespace REST\Configuration;

	class Requisites
	{
		public function __construct()
		{
			$this->host = 'localhost';
			$this->user = 'root';
			$this->pass = 'passwd';
			$this->base = 'test_base';
			$this->char = 'utf8';
		}

		public function __call($requisiteName, $val = null)
		{
			if (isset($this->$requisiteName))
				return $this->$requisiteName;
		}
	}
