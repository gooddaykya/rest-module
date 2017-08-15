<?php
	namespace REST\Components\Database;

	class PDOBase implements \REST\Interfaces\DatabaseAdapter
	{
		private $db;
		private $host;
		private $user;
		private $pass;
		private $base;
		private $char;

		public function __construct(\REST\Configuration\Requisites $req)
		{
			$this->host = $req->host();
			$this->user = $req->user();
			$this->pass = $req->pass();
			$this->base = $req->base();
			$this->char = $req->char();
		}

		public function connect()
		{
			$dsn = 'mysql:host=' . $this->host . ';' .
				   'dbname='     . $this->base . ';' .
				   'charset='    . $this->char . ';';
			$this->db = new \PDO($dsn, $this->user, $this->pass);
		}

		public function getQuery(string $request,
								 array  $params = array(),
								 string $requestType)
		{
			$result = false;
			$stmt   = $this->db->prepare($request);

			foreach ($params as $pholder => $val) {
				if (is_int($val))
					$stmt->bindValue($pholder, $val, \PDO::PARAM_INT);
				else
					$stmt->bindValue($pholder, $val, \PDO::PARAM_STR);
			}

			$stmt->execute();

			switch ($requestType)
			{
				case 'insert':
				case 'update':
				case 'delete':
					$result = $stmt->rowCount();
					break;

				case 'select':
					$result = $stmt->fetch(\PDO::FETCH_OBJ);
					break;

				case 'selectAll':
					$result = $stmt->fetchAll(\PDO::FETCH_OBJ);
					break;

				default:
					throw new \Exception('PDOBase :  wrong request type' . PHP_EOL);
			}

			return $result;
		}
	}
