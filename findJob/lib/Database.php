<?php
class Database{

	private $db_host = DB_HOST;
	private $db_name = DB_NAME;
	private $db_user = DB_USER;
	private $db_password = DB_PASSWORD;

	private $dbh;
	private $stmt;
	private $error;

	public function __construct(){
		$dsn = "mysql:host=".$this->db_host.";dbname=".$this->db_name .";port=3306";
		$options = array( 	
							PDO::ATTR_PERSISTENT => true,
							PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
						);
		try {
			$this->dbh = new PDO($dsn, $this->db_user, $this->db_password, $options);
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			die($this->error);
		}
	}

	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}
	
	public function bind($param, $value, $type=null){
		if(is_null($type)){
			switch (true) {
				case is_int($value):
					$param = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$param = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$param = PDO::PARAM_NULL;
					break;
				default:
					$param = PDO::PARAM_STR;
					break;
			}
		}

		$this->stmt->bindValue($param, $value, $type);
	}

	public function execute(){
		return $this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		$this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function single(){
		$this->execute();
		$this->stmt->fetch(PDO::FETCH_OBJ);
	}
}