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
			try {
				
			if (empty($this->body))
				throw new \Exception('POST :  expected body' . PHP_EOL);
			else
				$this->result = $this->resource->post($this->body);

			} catch (\Exception $e) {

				throw $e;

			}
		}
	}
