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
    <td colspan="11" align="center">Payment History</td>
  </tr>
  <tr>

    <td>Client_ID</td>
    <td>Amount</td>
    <td>Phone Number</td>
    <td>Address</td>
    <td>Patient Diseases</td>
    <td>Date</td>

  </tr>

  <tr>

    <td>01</td>
    <td>2000</td>
    <td>01724678053</td>
    <td>Kishorgong</td>
    <td>Fever</td>
    <td>1/9/21</td>

  </tr>
  
   <tr>

    <td>10</td>
    <td>500</td>
    <td>01859990813</td>
    <td>Dhaka</td>
    <td>Ear</td>
    <td>1/8/21</td>

  </tr>

   <tr>

    <td>01</td>
    <td>8000</td>
    <td>01772468090</td>
    <td>Bogra</td>
    <td>Fever</td>
    <td>1/8/21</td>

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