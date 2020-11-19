<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "fooddelievery";


$con = mysqli_connect($server , $user , $password , $db);

if($con){
	?>
	<script >
		alert ("connection successful");
	</script>
	<?php
}else{
	?>
	<script >
		alert ("connection error");
	</script>
	<?php
}







?>