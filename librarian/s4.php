<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Member Table</strong>
                                </div>
                                <ul class="nav nav-pills">
										<li><a href="member.php">All</a></li>
										<li><a href="s1.php">Senior 1</a></li>
										<li><a href="s2.php">Senior 2</a></li>
										<li><a href="s3.php">Senior 3</a></li>
										<li   class="active"><a href="s4.php">Senior 4</a></li>
										<li><a href="s5.php">Senior 5</a></li>
                                        <li><a href="s6.php">Senior 6</a></li>
                                        
                                        <li ><a href="not_student.php">Teachers</a></li>
                                        <li><a href="administrator.php">Administration</a></li>
                                        <li><a href="support.php">Support Staff</a></li>
                                        <div class="pull-right">
								<a href="" onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Print</a>
								</div>
									</ul>
                                <div>
                                </div>
                                



                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                             
								<p><a href="add_member.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Add Member</a></p>
							
                                <thead>
                                    <tr>
                                    <th>No*</th> 
                                        <th>Name</th>                                 
                                        <th>Gender</th>
                                        <th>Class</th>
										<th>Section</th>
										<th>Student ID</th>
										<th>Type</th>
										
										<th>Status</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($conn,"select * from member where year_level='S4'")or die(mysqli_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['member_id'];  ?>
									<tr class="del<?php echo $id ?>">
									
                                    <td><?php echo $row['member_id']; ?> </td>                             
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
                                    <td><?php echo $row['gender']; ?> </td> 
                                    <td><?php echo $row['year_level']; ?></td> 
                                    <td><?php echo $row['address']; ?> </td>
                                    <td><?php echo $row['contact']; ?></td>
									<td><?php echo $row['type']; ?></td> 
									
									<td><?php echo $row['status']; ?></td> 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="100">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_student<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_student_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_member.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>