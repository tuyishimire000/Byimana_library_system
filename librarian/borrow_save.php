	<?php
 	include('dbcon.php');
	 if (isset($_POST['submit'])){
	$id=$_POST['selector'];
 	$member_id  = $_POST['member_id'];
	$due_date  = $_POST['due_date'];
    $snumber = $_POST['snumber'];
	$rnumber = $_POST['rnumber'];
	if ($id == '' ){ 
	header("location: borrow.php");
	?>
	

	<?php }else{
	


	mysqli_query($conn,"insert into borrow (member_id,date_borrow,due_date,snumber,rnumber) values ('$member_id',NOW(),'$due_date','".$_POST["snumber"]."','".$_POST["rnumber"]."')")or die(mysqli_error());
	$query = mysqli_query($conn,"select * from borrow order by borrow_id DESC")or die(mysqli_error());
	$row = mysqli_fetch_array($query);
	$borrow_id  = $row['borrow_id']; 
	$snumber = $row['snumber'];
	

$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($conn,"insert into borrowdetails (book_id,borrow_id,borrow_status,snumber,rnumber) values('$id[$i]','$borrow_id','pending','".$_POST["snumber"]."','".$_POST["rnumber"]."')")or die(mysqli_error());

}
header("location: borrow.php");
} 
	 } 
?>

	

	
	