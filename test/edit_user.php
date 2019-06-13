<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>





<?php include "config.php";

$sql = "select * from tbl_user where id = 3";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){ 
	$name=$row['name1'];
	$username=$row['username'];
	$email=$row['email'];
	$password=$row['password'];
	$gender=$row['gender'];

}



$con->close();

?>


<div class="container">
<h3>Edit User</h3>
<form method="post" action="submit.php">
<div class="row">
	<div class="col-md-12">
		<div class="form-group">	
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name;?>"  class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Username</label> 
			<input type="text" name="username" value="<?php echo $username;?>" class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Email</label>
			<input type="email" name="email" disabled value="<?php echo $email;?>" required class="form-control" >				
		</div>
		<div class="form-group">	
			<label>change password</label>
			<input type="password" name="password"   required class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Confirmpassword</label>
			<input type="password" name="cpassword"   required class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Gender</label>
			<select name="gender"  class="form-control">
				<option class="form-control" value=""> Select Any</option>
				<option class="form-control" value="Male"> Male</option>
				<option class="form-control" value="Female"> Female</option>

			</select>			
		</div>
		<button type="submit" name="submit" value="update" class="btn btn-info" style="float: right;" > Edit</button>
		
	</div>
</div>	
</form>
</div>
