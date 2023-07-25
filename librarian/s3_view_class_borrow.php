<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_borrow.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">	
                	
						<div class="alert alert-info"><strong>Borrowed Books</strong></div>
                        <ul class="nav nav-pills">
										<li   ><a href="view_class_borrow.php">All</a></li>
										<li><a href="s1_view_class_borrow.php">Senior 1</a></li>
										<li><a href="s2_view_class_borrow.php">Senior 2</a></li>
										<li class="active"><a href="s3_view_class_borrow.php">Senior 3</a></li>
										<li><a href="s4_view_class_borrow.php">Senior 4</a></li>
										<li><a href="s5_view_class_borrow.php">Senior 5</a></li>
                                        <li><a href="s6_view_class_borrow.php">Senior 6</a></li>
                              
                                        <div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
									</ul>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example" style="margin-top:00px;">

                                <thead>
                                    <tr>
                                        <th>Book title</th>
                                        <th>Class</th>                                  
                                        <th>Class Leader</th>                                                   
                                        <th>Date Borrow</th>  
                                        <th>Return Date</th>                           
                                        <th>Book Ref</th>                                
                                       <th> Stroke no: </th>
										<th>Borrow Status</th>
                                        <th>Action</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from class_borrow 
                           
								LEFT JOIN class_container ON class_borrow.class_id = class_container.class_id
								LEFT JOIN class_borrowdetails ON class_borrow.borrow_id = class_borrowdetails.borrow_id
								LEFT JOIN book on class_borrowdetails.book_id =  book.book_id 
                                where class_borrowdetails.borrow_status='pending' and  class_container.class='s3'
                                ORDER BY class_borrow.borrow_id DESC
								  ")or die(mysqli_error($conn));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['class_borrow_details_id'];
				
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_title']; ?></td>
                                   
                                    <td><?php echo $row['class']." ".$row['section']; ?></td>
                                    <td><?php echo $row['cleader']; ?></td>
                                   
									<td><?php echo $row['date_borrow']; ?></td> 
                                    <td><?php echo $row['due_date']; ?></td> 
                                    
                                    <td><?php echo $row['isbn']; ?> </td>
									<td><?php echo $row['snumber']; ?> </td>
									<td><?php echo $row['borrow_status'];?></td>
									<td> <a rel="tooltip"  title="Return" id="<?php echo $borrow_details_id; ?>" href="#delete_book<?php echo $borrow_details_id; ?>" data-toggle="modal"    class="btn btn-success"><i ></i>Return</a>
                                    <?php include('class_modal_return.php'); ?>
                                    <td></td> 
									 
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