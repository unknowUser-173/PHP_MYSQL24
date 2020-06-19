<?php 
	require_once('Connection.php');
	class Model{
		var $connection;
		var $table = '';

		function __construct(){
			$conn_obj = new Connection();
			$this->connection = $conn_obj->conn;
		}

		function All(){
		    // Cau lenh truy van co so du lieu
		    $query = "SELECT * FROM ".$this->table;

		    $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    $result = $this->connection->query($query);

		    while($row = $result->fetch_assoc()) { 
		    	$data[] = $row;
		    }

		    return $data;
		}

		function find($id){
			// Cau lenh truy van co so du lieu
			 $query = "SELECT * FROM ".$this->table." WHERE id =" .$id;

			 $data = array();

		    // Thuc thi cau lenh truy van co so du lieu
		    return $this->connection->query($query)->fetch_assoc();
		}

		function create($data){
			$a = "";
			$b = "";
			foreach ($data as $key => $value) {
				$a .= $key.",";
				$b .= "'".$value."',";
			}
			$a = trim($a,",");
			$b = trim($b,",");
			$query = "INSERT INTO ".$this->table."(".$a.") VALUES (".$b.")";

			return $this->connection->query($query);
		}

		function update($data){
			$a = "";
			foreach ($data as $key => $value) {
				$a .= $key."='".$value."',";
			}
			$a = trim($a,",");
			$query = "UPDATE ".$this->table." SET ".$a." WHERE id =".$data['id'];

			return $this->connection->query($query);
		}

		function delete($id){
			$query = "DELETE FROM ".$this->table." WHERE id =".$id;

			return $this->connection->query($query);
		}

	}
 ?>