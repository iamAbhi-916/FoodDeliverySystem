<?php
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}else {
	echo "no connection";
}
mysqli_select_db($con , 'fooddelievery');
$name = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobno'];
$orders= $_POST['orders'];
$feedback =$_POST['comments'];

$query = "insert into userinfodata(name , email , mobileno , foodorder, feed )
values('$name' , '$email', '$mobile', '$orders','$feedback')";
echo "$query";
mysqli_query($con , $query);
header('location:index.php');

  ?>