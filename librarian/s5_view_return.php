<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>Borrowed Books</strong></div>
                        <ul class="nav nav-pills">
										<li><a href="return.php">All</a></li>
										<li><a href="s1_view_return.php">Senior 1</a></li>
										<li><a href="s2_view_return.php">Senior 2</a></li>
										<li><a href="s3_view_return.php">Senior 3</a></li>
										<li><a href="s4_view_return.php">Senior 4</a></li>
										<li    class="active"><a href="s5_view_return.php">Senior 5</a></li>
                                        <li><a href="s6_view_return.php">Senior 6</a></li>
                                        <li><a href="not_student_view_return.php">Teachers</a></li>
                                        <li ><a href="admin_view_return.php">Administrators</a></li>
                                        <li><a href="support_view_return.php">Supporting Staff</a></li>

                                        <div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
									</ul>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                <thead>
                                    <tr>
                                    <th>Book title</th>                                 
                                        <th>Borrower</th>                                 
                                        <th>Class</th> 
                                        <th>Section</th>                                
                                        <th>Date Borrow</th>  
                                        <th>Return Date</th>                                 
                                        <th>Book Ref</th>  
                                        <th>Stroke no:</th>                              
                                        <th>Date Returned</th>
										<th>Borrow Status</th>

                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								where borrowdetails.borrow_status = 'returned'  and member.year_level='s5' ORDER BY borrow.borrow_id DESC
								  ")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
				
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['year_level']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td> 
                                    <td><?php echo $row['due_date']; ?></td> 
                                    <td><?php echo $row['isbn']; ?> </td>
                                    <td><?php echo $row['snumber']; ?> </td>
									<td><?php echo $row['date_return']; ?> </td>
									<td><?php echo $row['borrow_status'];?></td>
									
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							

			</div>		
	
<script>		
$(".uniform_on").change(function(){
    var max= 1;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('1 Book is allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>

<?php include('footer.php') ?>	