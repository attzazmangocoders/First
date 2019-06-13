<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<div class="container">
<h3>User SignUp</h3>
<form method="post" action="submit.php">
<div class="row">
	<div class="col-md-12">
		<div class="form-group">	
			<label>Name</label>
			<input type="text" name="name" class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Username</label>
			<input type="text" name="username" class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Email</label>
			<input type="email" name="email" required class="form-control" >				
		</div>
		<div class="form-group">	
			<label>password</label>
			<input type="password" name="password" required class="form-control" >				
		</div>
		<div class="form-group">	
			<label>Gender</label>
			<select name="gender" class="form-control">
				<option class="form-control" value=""> Select Any</option>
				<option class="form-control" value="Male"> Male</option>
				<option class="form-control" value="Female"> Female</option>

			</select>			
		</div>
		<button type="submit" name="submit" value="signup" class="btn btn-info" style="float: right;" > Submit</button>
		<a href="edit_user.php"  class="btn btn-danger" > Edit Users</a>
	</div>
</div>	
</form>
</div>
