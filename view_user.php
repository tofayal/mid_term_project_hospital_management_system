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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Client.." title="Type in a name">    
<table id="myTable">
	<tr>
    <td colspan="11" align="center">All Client information</td>
  </tr>
  <tr>

    <th>ID</th>
    <th>NAME</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>Patient Diseases</th>
    <th>Patient Gender</th>
    <th>Patient Age</th>
    <th>Date</th>

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
  
   <tr>

    <td>10</td>
    <td>Abir</td>
    <td>01672467893</td>
    <td>Dhaka</td>
    <td>Ear</td>
    <td>Male</td>
    <td>39</td>
    <td>1/8/21</td>

  </tr>
   <tr>

    <td>01</td>
    <td>Musa</td>
    <td>01782467863</td>
    <td>Kuril</td>
    <td>Fever</td>
    <td>Male</td>
    <td>56</td>
    <td>1/8/21</td>

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