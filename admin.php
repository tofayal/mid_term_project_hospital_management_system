<?php
  session_start();
  if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
</head>
<body >
  <h1 align="center"><b><i>Online Health Care System</i></b></h1>

  <a href="n_client.php"><h5 align="right" style="color: red">New Client-1</h5></a>
    <a href="n_review.php"><h5 align="right" style="color: red">New Review-1</h5></a>
  <center>
 <fieldset >
   <center>
    <h2>Welcome <?php print_r($_SESSION['user']['username']) ?>!</h2><br>
    <a href="profile.php">Show Profile</a><br>
    <a href="doctor.php">Doctor List</a><br>
    <a href="review.php">Check all Doctor’s reviews</a><br>
    <a href="p_history.php">Payment History</a><br>
    <a href="view_user.php">Show Client information</a><br>

    <a href="logout.php">Logout</a><br>
  </center>

  </fieldset>
  </center>
</body>
</html>
<?php
 
 }else{
  header('location: sign_in.php');
 }

?>