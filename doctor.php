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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Doctor.." title="Type in a name">

<table id="myTable">
	<tr>
    <td colspan="11" align="center">All Doctors</td>
  </tr>
  <tr>

    <th>ID</th>
    <th>NAME</th>
    <th>Degisnation</th>
    <th>Qualification</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Visit</th>
    <th>Patient Number</th>
    <th>Total_Earn</th>
    <th colspan="2" align="center">Action</th>

  </tr>

  <tr>

    <td>01</td>
    <td>Dr. Bithi</td>
    <td>Medical Officer</td>
    <td>MBBS</td>
    <td>017724678053</td>
    <td>Kuril</td>
    <td>500</td>
    <td>2</td>
    <td>1000</td>
    <td><a href="delete.php">Delete </a></td>
     <td> <a href="Update.php"> Update</a></td>

  </tr>
  
 <tr>

    <td>02</td>
    <td>Dr. Akhi</td>
    <td>Medical Officer</td>
    <td>MBBS</td>
    <td>016224678090</td>
    <td>Mohammadpur</td>
    <td>500</td>
    <td>6</td>
    <td>3000</td>
   <td><a href="delete.php">Delete </a></td>
     <td> <a href="Update.php"> Update</a></td>

  </tr>

  <tr>

    <td>03</td>
    <td>Dr. Sabab</td>
    <td>Assistant Professor</td>
    <td>MBBS,FCPS</td>
    <td>0171818975</td>
    <td>Danmondi</td>
    <td>1000</td>
    <td>12</td>
    <td>12000</td>
    <td><a href="delete.php">Delete </a></td>
     <td> <a href="Update.php"> Update</a></td>

  </tr>

  <tr>

    <td>04</td>
    <td>Dr. Moni</td>
    <td>Associate Professor</td>
    <td>MBBS,FCPS,FRCS</td>
    <td>01632115466</td>
    <td>Kassempur</td>
    <td>1000</td>
    <td>22</td>
    <td>22000</td>
    <td><a href="delete.php">Delete </a></td>
     <td> <a href="Update.php"> Update</a></td>

  </tr>

</table>


<a href="admin.php">Back</a>
</center>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
<?php
 
 }else{
  header('location: login.html');
 }

?>