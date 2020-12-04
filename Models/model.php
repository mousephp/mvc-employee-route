<?php 
/**
 * 
 */
class model
{
	
	public static function get_all_from($table)
	{

		$db=Database::connect();
		$sql="SELECT * FROM $table";
		$stmt=$db->prepare($sql);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		return $result;
	}

	public function store($table,$data){
		$db=Database::connect();
		$sql="INSERT INTO employee(name,age,sex,employee_type) VALUES(:name,:age,:sex,:employee_type)";
		$query=$db->prepare($sql);
		$isInsert=$query->execute($data);
		return $isInsert;

		//var_dump($data);
	}

	public function getId($id){
		//var_dump("-getId-",$id);
		$db=Database::connect();
		$sql="SELECT * FROM employee WHERE id=:id";
		$query =$db->prepare($sql);
		$query ->bindParam(':id',$id);
		$query->execute();
		$get=$query->fetch(PDO::FETCH_ASSOC);
		return $get;
	}

	public function update($table,$id,$data){
		$db=Database::connect();
		$sql="UPDATE $table SET name=:name, age=:age, sex=:sex, employee_type=:employee_type WHERE id=:id";
		$query=$db->prepare($sql);
		$isUpdate=$query->execute($data);
		return $isUpdate;
	}

	public static function destroy($table,$column,$value)
	{
		$db=Database::connect();
		$sql="DELETE FROM $table WHERE $column =:value";
		$delete=$db->prepare($sql);
		$delete->bindParam(':value',$value);
		$delete->execute();
		$delete->closeCursor();
	}
}

?>