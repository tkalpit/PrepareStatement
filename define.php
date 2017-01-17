<?php
$username=$_POST['username'];
$password=$_POST['password'];
$conn=mysqli_connect("localhost","root","",kalpit);
$sql=mysqli_prepare($conn,"insert into table1(Username,Password)values(?,?)");
mysqli_bind_param($sql,"ss",$Username,$Password);
$Username=$username;
$Password=$password;
if(mysqli_execute($sql))
{
	echo "Record enter in database successfully";
}
else
{
	echo "OOPS! Data not entered into database";
}
mysqlI_close($conn);
?>