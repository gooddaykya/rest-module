<?php
	namespace REST\Components\Rest;

	class GET extends \REST\Components\Rest
	{
		private $model;
		private $id;

		public function __construct($model ,$id)
		{
			$this->resource = $model;
			$this->id = $id;
		}

		public function execute()
		{
			try {

				$this->result = $this->resource->get($this->id);

			} catch (\Exception $e) {

				throw $e;

			}
		}
	}
