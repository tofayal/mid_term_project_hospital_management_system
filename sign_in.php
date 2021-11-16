<html>
<head>
  <title> Login Page</title>
</head>
<body>
  <form method="post" action="sign_in_check.php">
    <fieldset style="width:0px">
      <legend>LOGIN</legend>
      <table>
        <tr>
          <td>Username: </td>
          <td><input type="text" name="username" value=""></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" value=""></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="Submit">
            <br>Not register yet?<a href="sign_up.php"> click here!</a></td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>