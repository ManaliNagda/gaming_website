<?php
$conn=mysqli_connect("localhost","root","");
echo"Connected to MySQL<br>";
$db=mysqli_select_db($conn,"dm");

$query="INSERT into login VALUES('$_POST[username]','$_POST[password]')";
$result=mysqli_query($conn,$query);
echo"Öne record inserted";
/*$query1="UPDATE details SET password='abcdef' WHERE username='virraj'";
$result1=mysqli_query($conn,$query1);
echo "One record updated";*/
mysqli_close($conn);
?>