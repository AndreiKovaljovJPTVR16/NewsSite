<?php
class db {
	private $conn;
	private $host;
	private $user;
	private $password;
	private $baseName;
	

    function __construct($params=array()) {
		$this->conn = false;
        $this->host = 'localhost'; //hostname
        $this->user = 'root'; //username
        $this->password = ''; //password
        $this->baseName = 'jptvr16_newssite'; //name of your database
        $this->debug = true;
        $this->connect(); //метод соединения с базой данных
	}

	function __destruct() {
		$this->disconnect();
	}
	
	function connect() {
		if (!$this->conn) {
			try {
				$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->baseName.'', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));  
			}
			catch (Exception $e) {
				die('Connection failed : ' . $e->getMessage());
			}

			
		}

		return $this->conn;
	}

	function disconnect() {
		if ($this->conn) {
			$this->conn = null;
		}
	}
	
	function getOne($query) {	
		try{
			$stmt = $this->conn->prepare($query);
			$stmt->execute();//PDOStatement::execute — Запускает подготовленный запрос на выполнение	
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$response = $stmt->fetch();
			
			return $response;
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	
	function getAll($query) {
		try{
			$stmt = $this->conn->prepare($query);
			$stmt->execute();//PDOStatement::execute — Запускает подготовленный запрос на выполнение	
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$response = $stmt->fetchAll();
			
			return $response;
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
	}
	//--------------------------------------------------------------------
	//http://php.net/manual/ru/pdo.exec.php
	//PDO::exec — Запускает SQL запрос на выполнение и возвращает количество строк, задействованных в ходе его выполнения
	//запросы действия INSERT   UPDATE    DELETE
	function executeRun($query) {
	
		try{
			$response = $this->conn->exec($query);
			
			return $response;
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		
	}
}