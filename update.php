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
    <form action="doctor.php">
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
    <td><input type="text"name="d_name" value="Dr. Bithi"></td>
  </tr>
  <tr>
    <td>Degisnation</td>
    <td><input type="text"name="d_deg" value="Medical Ofiicer"></td>
  </tr>
  <tr>
    <td>Qualification</td>
    <td><input type="text"name="d_qua" value="MBBS"></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td><input type="Number"name="d_phn" value="01772468053"></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text"name="d_add" value="Kuril"></td>
  </tr>
  <tr>
    <td>Visit</td>
    <td><input type="Number"name="d_visit" value="500"></td>
  </tr>
  <tr>
    <td>Patient Number</td>
    <td><input type="Number"name="d_pnum" value="2"></td>
  </tr>
   <tr>
    <td>Total_Earn</td>
    <td><input type="Number"name="d_earn" value="1000"></td>
  </tr>
    <tr>
    <td colspan="2" align="center"><input type="submit" value="Confirm update"> </td>
  </tr>
  

</table>
</form>
<a href="doctor.php">Back</a>
</center>

</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>