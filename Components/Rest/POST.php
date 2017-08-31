<?php
	namespace REST\Components\Rest;

	class POST extends \REST\Components\Rest
	{
		private $resource;
		private $body;

		public function __construct($model, $body)
		{
			$this->resource = $model;
			$this->body     = $body;
		}

		public function execute()
		{
			if (empty($this->body))
				throw new \Exception('POST :  no body specified' . PHP_EOL);
			else
				$this->result = $this->resource->post($this->body);
		}
	}
