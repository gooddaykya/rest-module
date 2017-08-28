<?php
	namespace REST\Components\Rest;

	class PUT extends \REST\Components\Rest
	{
		public function execute()
		{
			try {

				$this->result = $this->model->put($this->conf->id(), $this->conf->body());

			} catch (\Exception $e) {

				throw $e;

			}
		}
	}
