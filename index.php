<?php 

require_once 'config/db.php';
//require_once 'Models/master.php';co the
//$conn=Database::connect();//co o file router roi
//require_once "Models/employeeModel.php";//false

if(isset($_GET['controller'],$_GET['action'])){
	$controller=$_GET['controller'];
	$action=$_GET['action'];
}else{
	$controller='home';
	$action='isHome';
}
// ===>mặc định vào trang controller và action là rỗng vì vậy else{
// 	$controller='home';
// 	$action='index';
// }
// =>tiếp tục được gọi sang layout.php 
// => file route được thêm vào file layout 
// - file route sẽ sử lý hai giá trị tồn tại là $controller='home';$action='index';nhận được ở file index và gọi vào controller và show dữ liệu theeo y/c

//require_once 'Controllers/'.$controller.'.php'; co the


var_dump($controller,$action);

//?contronller=nhanvien&action=luong
require_once "Views/layout.php";

?>


<!-- ***Cách thức hoạt động
b1: kiểm tra xem có tồn tại $controller & $action không
b2: include layout.php -> router.php 
từ router.php xác định $controller & $action,  $controller là name file  controller cần gọi đến, $action là phương thức của controller
b3: trường họp phương thức của controller tiếp tục gọi đến một phương thức khác của model:
 +$action của $controller gọi đến $action của $model từ $model này có thể tiếp tục gọi đến $action của $model  khác
b4:các model truy xuất dữ liệu trả về cho $controller và $controller trả dl về cho view thông qua các router -->




















