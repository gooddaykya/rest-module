<?php
	namespace REST\Components\Rest;

	class GET extends \REST\Components\Rest
	{
		public function execute()
		{
			try {

				$this->result = $this->model->get($this->conf->id());

			} catch (\Exception $e) {

				throw $e;

			}
		}
	}
