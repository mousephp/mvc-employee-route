<?php 
require_once 'Controllers/'.$controller.'.php';
require_once 'Models/model.php';
require_once 'Config/db.php'; 


switch ($controller) {
	case 'home':
	$controller=new home();
	$controller->isHome();
	break;
	
	case 'employee':
	$controller=new employee();
	require_once "Models/employeeModel.php";
	break;

}


//nhan duoc bien tu index
$controller->{$action}();
print_r($controller);

?>