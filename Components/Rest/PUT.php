<?php
	namespace REST\Components\Rest;

	class PUT extends \REST\Components\Rest
	{
		private $resource;
		private $id;
		private $body;

		public function __construct($model, $id, $body)
		{
			$this->resource = $model;
			$this->id       = $id;
			$this->body     = $body;
		}

		public function execute()
		{
			try {

				$this->result = $this->resource->put($this->id, $this->body);

			} catch (\Exception $e) {

				throw $e;

			}
		}
	}
