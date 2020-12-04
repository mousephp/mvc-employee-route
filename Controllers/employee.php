<?php 

class employee 
{
	
	public static function index()
	{
		$dsnv=employeeModel::index();
		//var_dump($dsnv);
		require_once 'Views/employee/index.php';
	}

	public function create(){
		if(isset($_POST['submit'])){
			$name=isset($_POST['name']) ? $_POST['name'] : " ";
			$age=isset($_POST['age']) ? $_POST['age'] : " ";
			$sex=isset($_POST['sex']) ? $_POST['sex'] : " ";
			$employee_type=isset($_POST['employee_type']) ? $_POST['employee_type'] : " ";
			$em=new employeeModel();
			if(empty($name) || empty($age) || empty($sex) || empty($employee_type) ){
				echo "<h5 class='text-center' style='color:red;'> không được để trống</h5>";
			}else{
				$data=array(
					':name'=>$name,
					':age'=>$age,
					':sex'=>$sex,
					':employee_type'=>$employee_type,
				);

				$insert=$em->store_md($data);
				if($insert){
					echo "Thêm thành công";
					header('Location:index.php?controller=employee&action=index');
				}else{
					echo "Không thành công";
				}
				var_dump($name,$age,$sex,$employee_type);
				//header('Location:index.php?controller=employee&action=index');
			}
			
		}
		require_once 'Views/employee/add.php';

	}

	public function edit(){
		$id=$_GET['id'];
		if(!isset($_GET['id'])){
			echo "id khong ton tai";
		}
		$getmd = new employeeModel;
		//$book duoc truyền sang getCateById và biến $book sẽ show ra view edit
		$get_em_id = $getmd->getById($id);
		//var_dump('hahah-',$get_em_id);
		$name=$age=$sex=$employee_type='';
		if(isset($_POST['submit'])){
			//dat nayla toi tot nhat
			$name=isset($_POST['name']) ? $_POST['name'] : " ";
			$age=isset($_POST['age']) ? $_POST['age'] : " ";
			$sex=isset($_POST['sex']) ? $_POST['sex'] : " ";
			$employee_type=isset($_POST['employee_type']) ? $_POST['employee_type'] : " ";
			if(empty($name) || empty($age) || empty($sex) ){
				echo "<h5 class='text-center' style='color:red;'> không được để trống</h5>";
				//error neu nhu  sex,employee_type co value=0 vi empty=0=>true
			}else{
				$em=new employeeModel();
				$data=[
					'id'=>$id,
					':name'=>$name,
					':age'=>$age,
					':sex'=>$sex,
					':employee_type'=>$employee_type,
				];
				//$edit=employeeModel::update_md($data); false
				$edit=$em->update_md($data);

				if($edit){
					header('Location:index.php?controller=employee&action=index');
					echo "Sửa thành công";
				}else{
					echo "Không thành công";
				}
				//var_dump($data);
			}

		}
		
		require_once 'Views/employee/edit.php';

	}


	public static function delete()
	{
		if (isset($_GET['id'])) {
			employeeModel::delete_md_id($_GET['id']);
			header('location:?controller=employee&action=index');
		} else {
			header('location:.');
		}
		
	}
}

?>