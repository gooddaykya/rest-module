<?php
	namespace REST\Components;

	class Configurator
	{
		private $id;
		private $body;

		public function __construct(int $id = null, $body = array())
		{
			$this->id = $id;
			$this->body = $body;
		}

		public function __call($prop, $params = null)
		{
			if (property_exists($this, $prop))
				return $this->{$prop};
			else
				throw new \Exception('Configurator :  unknown property' . PHP_EOL);
		}
	}
