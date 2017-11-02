<?php 
class Database {
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "kazino";

	private $connection;

function __construct() {
		try {
			$this->connection = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->dbname ."", $this->username, $this->password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connected<br>";
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}

	}


public function select ($sql, $param = []) {
	$stmt = $this->connection->prepare($sql);
	$stmt->execute($param);
    return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function insert ($sql, $param = []) {
	$stmt = $this->connection->prepare($sql);
	$stmt->execute($param);
	return $this->connection->lastInsertID();
}

public function remove ($sql, $param = []) {
	$stmt = $this->connection->prepare($sql);
	$stmt->execute($param);
	return $this->connection->lastInsertID();
}

function __destruct() {
	$this->connection = null;
}

}
