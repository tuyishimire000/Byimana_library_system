<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_member.php'); ?>
<?php 
		$query=mysqli_query($conn,"select * from member where member_id='$get_id'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		
		?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Add Teacher</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a></p>
	<div class="addstudent">
	<div class="details">Please Enter Details Below</div>		
	<form class="form-horizontal" method="POST" action="member_save.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Firstname:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Firstname" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Lastname:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender:</label>
			<div class="controls">
			<select name="gender" required>
				<option></option>
				<option>Male</option>
				<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Department:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="address"  placeholder="Department" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Member ID:</label>
			<div class="controls">
			<input type="text" class="search" name="contact"  placeholder="Supporting Member ID"  autocomplete="off"  maxlength="12" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Type:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Student</option>
									<option>Teacher</option>
									<option>Administration</option>
									<option>Supporting staff</option>
									
									
				</select>
			</div>
		</div>
			
		
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
				<select name="status" required>
									<option><?php  echo $row['status']; ?></option>
									<option>Active</option>
									<option>Banned</option>
				</select>
			</div>
		</div>
				
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>