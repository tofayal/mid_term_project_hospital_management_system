<html>
<head>
  <title> Signup Page</title>
</head>
<body>
  <form method="post" action="sign_up_check.php">
    <fieldset>
      <legend>Signup</legend>
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
          <td>Email:</td>
          <td><input type="text" name="email" value=""></td>
        </tr>
        <tr>
          <td>Phone:</td>
          <td><input type="number" name="phone" value="" maxlength="11"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" name="submit" value="Submit"></td>
        </tr>
      </table>
    </fieldset>
  </form>
</body>
</html>
