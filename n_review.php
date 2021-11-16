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
    <td colspan="4" align="center">Doctor's New Review</td>
  </tr>
    <tr>
    <td><b>Doctor's ID</b> </td>
    <td><b>Doctor's Name</b> </td>
    <td><b>Review </b></td>
    <td><b>Date</b> </td>
  </tr>
  <tr>
    <td>01 </td>
    <td>Dr. Bithi</td>
    <td>She is a good doctor. Very Careful.</td>
    <td>25/10/21</td>
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