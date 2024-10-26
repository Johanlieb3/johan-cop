
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label>Email:</label>
  <input type="email" name="email" required><br><br>
  <label>Password:</label>
  <input type="password" name="password" required><br><br>
  <input type="submit" name="login" value="Login">
</form>