<?php 


include "config.php";
if($POST['submit']=='signup'){


	$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$password1=md5($password);
$gender=$_POST['gender'];


$sql = "INSERT INTO tbl_user (name1, username,email,password,gender) VALUES ('$name', '$username', '$email','$password1','$gender')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
     echo "Unsuccessfully";
}


}



if($POST['submit']=='update'){


	$name=$_POST['name'];
$username=$_POST['username'];


$password=$_POST['password'];
$password=$_POST['cpassword'];
$cpassword=$_POST['cpassword'];
if($password!=$cpassword){

	echo '<div align="center" id="alert1" class="alert alert-'.$_GET['class'].' " style=" width: 50%; height:50px;  ; margin: 0 auto; " role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Message: </span>'.$_GET['msg'].'</div><br>';

}



$gender=$_POST['gender'];
	
$sql = "INSERT INTO tbl_user (name1, username,email,password,gender) VALUES ('$name', '$username', '$email','$password1','$gender')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
     echo "Unsuccessfully";
}


}
$con->close();



?>