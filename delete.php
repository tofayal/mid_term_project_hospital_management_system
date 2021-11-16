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
    <td colspan="2" align="center">Delete Doctor</td>
  </tr>
   
  <tr>
    <td>ID</td>
    <td>01</td>
  </tr>
  <tr>
    <td>NAME</td>
    <td>Dr. Bithi</td>
  </tr>
  <tr>
    <td>Degisnation</td>
    <td>Medical Ofiicer</td>
  </tr>
  <tr>
    <td>Qualification</td>
    <td>MBBS</td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td>01772468053</td>
  </tr>
  <tr>
    <td>Address</td>
    <td>Kuril</td>
  </tr>
  <tr>
    <td>Visit</td>
    <td>500</td>
  </tr>
  <tr>
    <td>Patient Number</td>
    <td>2</td>
  </tr>
   <tr>
    <td>Total_Earn</td>
    <td>1000</td>
  </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="Confirm Delete"> </td>
  </tr>
  

</table>
<a href="doctor.php">Back</a>
</center>

</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>