<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_archive.php'); ?>
<header>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.th
{
	color:red;
}
</style>

</header>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
						<!--  -->
								    <ul class="nav nav-pills">
										<li class="active"><a href="archive.php"><i class="icon-bell-alt"></i>&nbsp;Notifications</a></li>
										<div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
									</ul>


									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example" style="margin-top:000px;">
                               

                                
							   <thead>
									   <tr>
										   <th>Book title</th>                                 
										   <th>Borrower</th>                                 
										   <th>Class</th>    
										   <th>Section</th>                             
										   <th>Date Borrow</th>  
										   <th>Return Date</th>                           
										   <th>Book Ref</th>                                
										  <th> Stroke no: </th>
										   <th>Borrow Status</th>
										   <th>Condition</th>
										  
									   </tr>
								   </thead>
								   <tbody class="th">
									<?Php
require "dbcon.php";// Database connection

/*if($stmt = $conn->query("SELECT * FROM borrow LEFT JOIN member ON borrow.member_id = member.member_id
LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
LEFT JOIN book on borrowdetails.book_id =  book.book_id 
                where borrowdetails.borrow_status='pending' 
                ORDER BY borrow.borrow_id DESC" )){

  echo "  [  ".$stmt->num_rows."  ]"."<br>";

  while ($row = $stmt->fetch_assoc()) {
	echo $row['borrow_id']."<br>";
	echo $row['member_id']."<br>";
  }
}else{
echo $conn->error;}*/
$ab=mysqli_query($conn,"SELECT * FROM borrow LEFT JOIN member ON borrow.member_id = member.member_id
LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
LEFT JOIN book on borrowdetails.book_id =  book.book_id 
                where borrowdetails.borrow_status='pending' 
                ORDER BY borrow.borrow_id DESC");

				
while($row=(mysqli_fetch_assoc($ab)))
{
	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$ddate=$row['due_date'];
	
	$tmo="time out";
	$cdate=date("d-m-y");
	$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
	
	if(($cdate)>($ddate))
	/*{
		echo "Time not out";
	}
	else*/
	{
		echo '<tr>';
		 echo '<td>'.$row['book_title'].'</td>';
		 echo '<td>'.$row['firstname']." ".$row['lastname'].'</td>';
		 echo '<td>'.$row['year_level'].'</td>';
		 echo '<td>'.$row['address'].'</td>';
		 echo '<td>'.$row['date_borrow'].'</td>';
		 echo '<td>'.$row['due_date'].'</td>';
		 echo '<td>'.$row['isbn'].'</td>';
		 echo '<td>'.$row['snumber'].'</td>';
		 echo '<td>'.$row['borrow_status'].'</td>';
		 echo '<td>'.'<i class="icon-warning-sign icon-large"></i>&nbsp'.$tmo.'</td>';
		
		
	}?>
	
	<?php  }  ?>
	
<?php include('footer.php') ?>