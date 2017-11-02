<?php 

Interface UserInterface {
	public function getAllUsers();
	public function getUsersById();
	public function getUsersByUsername();
	public function removeUser();
}

class User {

	public $db; 

	function __construct(Database $db) {
		$this->db = $db;
	}

	public function getAllUsers() {
		return $this->db->select("SELECT * FROM vartotojai");
	}

	public function getUsersById($id) {
		return $this->db->select("SELECT * FROM vartotojai WHERE id = :id", ["id" => $id]);
	}

	public function getUsersByUsername($username) {
		return $this->db->select("SELECT * FROM vartotojai WHERE vardas = :vardas", ["vardas" => $username]);
	}

	public function removeUser($username) {
		return $this->db->remove("DELETE FROM vartotojai WHERE vardas = :vardas", ["vardas" => $username]);
	}

	public function addUser($username, $password) {
		return $this->db->insert("INSERT INTO vartotojai (vardas, slaptazodis) VALUES (:username, :password)", ["username" => $username.rand(1000,9999), "password" => password_hash ($password, PASSWORD_DEFAULT)]);
	}

	// public function getUsersById() {
	// 	return $this->db->select("SELECT * FROM vartotojai WHERE id ");
	// }

}