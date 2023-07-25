<?php
 	include('dbcon.php');
	 if (isset($_POST['submit'])){
	$id=$_POST['selector'];
 	$class_id  = $_POST['class_id'];
	$due_date  = $_POST['due_date'];
    $snumber = $_POST['snumber'];
    $cleader=$_POST['cleader'];
	if ($id == '' ){ 
	header("location: class_borrow.php");
	?>
	

	<?php }else{
	


	mysqli_query($conn,"insert into class_borrow (class_id,date_borrow,due_date,snumber,cleader) values ('$class_id',NOW(),'$due_date','".$_POST["snumber"]."','".$_POST["cleader"]."')")or die(mysqli_error());
	$query = mysqli_query($conn,"select * from class_borrow order by borrow_id DESC")or die(mysqli_error($conn));
	$row = mysqli_fetch_array($query);
	$borrow_id  = $row['borrow_id']; 
	$snumber = $row['snumber'];
	

$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"insert into class_borrowdetails (book_id,borrow_id,borrow_status,cleader) values('$id[$i]','$borrow_id','pending','".$_POST["cleader"]."')")or die(mysqli_error($conn));

}
header("location: class_borrow.php");
} 
	 } 
?>

	

	
	