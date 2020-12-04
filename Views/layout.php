<?php 
include('employee/master.php')
?>


<nav>
	<a href="." class="<?php echo !isset($_GET['controller']) ? 'active' : null ?>">Home</a>
	<a href="?controller=employee&action=index" class="<?php  echo (isset($_GET['controller']) && $_GET['controller'] ==='employee' ) ? 'active' : null  ?>" >Employee</a>	<!-- ||=>false -->
</nav>
<hr>

<main>
	<?php require_once 'route.php'; ?>
</main>

<hr>

<footer>
	Copyright 2016
</footer>

