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
    <td colspan="11" align="center">All Client information</td>
  </tr>
  <tr>

    <td>ID</td>
    <td>NAME</td>
    <td>Phone Number</td>
    <td>Address</td>
    <td>Patient Diseases</td>
    <td>Patient Gender</td>
    <td>Patient Age</td>
    <td>Date</td>

  </tr>

  <tr>

    <td>01</td>
    <td>Amir</td>
    <td>017724678053</td>
    <td>Kishorgong</td>
    <td>Fever</td>
    <td>Male</td>
    <td>29</td>
    <td>1/9/21</td>

  </tr>
  
   
 

</table>
<a href="admin.php">Back</a>
</center>

</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>