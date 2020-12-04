<?php 
//require_once 'Models/model.php'; //true
class employeeModel extends model
{
	public static function index()
	{
		return parent::get_all_from('employee');
	}	

	public function store_md($data){
		//var_dump($data);
		parent::store('employee',$data);
	}

	public function getById($id){
		//$id=$_GET['id'];
		return parent::getId($id);
	}

	public function update_md($data){
		return parent::update('employee','id',$data);
	}

	public static function delete_md_id($id){
		  parent::destroy('employee','id',$id);
		}	



	}

	?>