<?php
	namespace REST\Components\Rest;

	class POST extends \REST\Components\Rest
	{
		public function execute()
		{
			if (empty($this->conf->body()))
				throw new \Exception('POST :  no body specified' . PHP_EOL);
			else
				$this->result = $this->model->post($this->conf->body());
		}
	}
