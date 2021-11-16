<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title>
</head>
<body>
<form action="/action_page.php">
  <fieldset style="width:0px">
    <legend>CHANGE PASSWORD</legend>
    <label for="id">Current Password</label><br>
    <input type="text" id="cu_pass" name="cu_pass"><br>
    <label for="password">New Password</label><br>
    <input type="password" id="n_pass" name="n_pass"><br>
    <label for="password">Retype New Password</label><br>
    <input type="password" id="r_pass" name="r_pass"><br><br>
    <input type="submit" value="Change">
    <a href="admin.php">Home</a>
  </fieldset>
</form>
</body>
</html>
<?php
 
 }else{
    header('location: login.html');
 }

?>