
<!doctype html>
<html >
<head><title>login</title>
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
  <form action="userloginmember.php" method="post">
    <b>Login member</b>
    <div class="form-group">
      <label>Username</label><br/>
      <input type="text" placeholder="   Username" name="username"><br/>
   
      <label>Password</label><br/>
      <input type="password" placeholder="   Password" name="password"><br/>

      <label>
        <input type="checkbox" name="remember" value="1"> Remember Me
      </label><br/>

    <button type="submit" name="submit">Login</button>
    <hr>
    <b>Belum punya akun?</b>
    <a href="registrasi.php" >Registrasi</a>
  </form>
  </div>
  <form action="admin/loginadmin.php" method="post">
    <button type="submit" name="submit">Login Admin</button>
  </form>
  
</body>
</html>
