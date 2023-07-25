<?php 
include('dbcon.php');

$id=$_GET['id'];
$book_id = $_GET['book_id'];

mysqli_query($conn,"update class_borrow LEFT JOIN class_borrowdetails on class_borrow.borrow_id =class_borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where class_borrow.borrow_id='$id' and class_borrowdetails.book_id = '$book_id'")or die(mysqli_error());						
 header('location:view_class_borrow.php');

?>	