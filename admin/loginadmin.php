
<!doctype html>
<html >
<head><title>login admin</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body >

  <div>
    <p align ="center">
    <br><b style="font-size:160%; color:blue;">Welcome To Go-Health</b><br>
    We Proudly  Present an Information About All The Health Stuff
  </div>
  

  </p>

   <div id="login">
  <form action="userloginadmin.php" method="post">
    <b>Login admin</b>
    <div class="form-group">
      <label>Username</label><br/>
      <input type="text" placeholder="   Username" name="usernameadmin"><br/>
   
      <label>Password</label><br/>
      <input type="password" placeholder="   Password" name="passwordadmin"><br/>

      <label>
        <input type="checkbox" name="remember" value="1"> Remember Me
      </label><br/>

    <button type="submit" name="submit">Login</button>
    <hr>
  </form>
  </div>
  <form action="/../web/loginmember.php" method="post">
    <button type="submit" name="submit">Login member</button>
  </form>
</body>
</html>
