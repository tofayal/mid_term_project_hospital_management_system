<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
  <h1 align="center"><b><i>Online Health Care System</i></b></h1>
  <center>
<table>
	<tr>
    <td colspan="2" align="center">Profile</td>
  </tr>
  <tr>
    <td>ID</td>
    <td>111</td>
  </tr>
  <tr>
    <td>NAME</td>
    <td><input type="text"name="name" value="Nirob"></td>
  </tr>
  <tr>
    <td>Blood Group</td>
    <td>A+</td>
  </tr>
  

</table>
<a href="c_pass.php">Change Password</a><br>
<a href="admin.php">Back</a>
</center>

</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>