<?php
include("dbconnect.php");
session_start();
// Only allow access if admin is logged in
if (!isset($_SESSION['admin_id'])) {
	header("Location: index.php");
	exit();
}
 
	
	$id=$_REQUEST['id'];
	
	$qy=mysqli_query($conn,"delete from register where id='$id'");
if($qy){?>
	<script> alert('Deleted Successfully')
window.location.href=("vstudent.php");</script>

<?php } ?>