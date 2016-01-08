<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="Dhimas">
	<link rel="icon" href="favicon.ico">

	<title>Registrasi</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style>
		html{
			position: relative;
			min-height: 100%
		}
		body{
			margin-bottom: 60px;
		}
		.footer{
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px;
			background-color: #f5f5f5;
		}
		body > .container{
			padding: 60px 15px 0;
		}
		.container .text-muted{
			margin: 20px 0;
		}
		.footer > .container{
			padding-right: 15px;
			padding-left: 15px;
		}
		code{
			font-size: 80%;
		}
		.pull-right {
		     float: right;
  		}
  		#reg{
      text-align: center;
      margin: 0 auto;
      background-color: none;
      width: 300px; 
      padding: 10px;
      font-family: helvetica;
      border-radius: 3px;
    }
  		.form-group{
      margin-top: 15px;
      margin-bottom: 10px;
      text-align: left;
      padding: 0 0 0 45px;
    }
	</style>
	
</head>
<body>
	<div id="reg">
		<form action="loginmember.php" method="post">
    		<button type="submit" name="submit">Back</button>
  		</form>
		<div>
			<p align="center" style="font-size:160%; color:blue;"><br >Silahkan Isi Data Diri Anda</br></p>
		</div>
		<div class="form-group">
			<table>
				<tr>
					<td><label>Username</label></td>
					<td>:</td>
					<td><input type="text" placeholder="Username" id="username"></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td>:</td>
					<td><input type="password" placeholder="Password" id="password"></td>
				</tr>
				<tr>	
					<td><label>Email</label></td>
					<td>:</td>
					<td><input type="text" placeholder="Email" id="email"></td>
				</tr>
				<tr>
					<td><label>No_Telp/HP</label></td>
					<td>:</td>
					<td><input type="text" placeholder="No Telepon/HP" id="no_telp"></td>
				</tr>
				<tr>
					<td><label>Alamat</label></td>
					<td>:</td>
					<td><textarea type="text" placeholder="Alamat" id="alamat"></textarea></td>
				</tr>	
				<tr>
					<td><label>No_rekening</label></td>
					<td>:</td>
					<td><input type="text" placeholder="No rekening" id="no_rek"></td>
				</tr>
			</table>
			<div id="buton">
				<button id="joss">Register</button>
			</div>
		</div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$("#buton").on("click","#joss",function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var email = $("#email").val();
		var no_telp = $("#no_telp").val();
		var alamat = $("#alamat").val();
		var no_rek = $("#no_rek").val();
		
		if(username == "" || password == "" || email == "" || no_telp == "" || alamat == "" || no_rek == "" ){
			alert("Isi dengan lengkap..!! "+username+""+password+""+email+""+no_rek+""+alamat+""+no_telp );
		} else if(!$.isNumeric(no_rek) && !$.isNumeric(no_telp)){
			alert("isi no_telp = "+no_rek+" dan no_rekening = "+no_telp+" dengan Benar !!!");
		} else if(!$.isNumeric(no_telp)){
			alert("isi no_telp = "+no_telp+" dengan Benar !!!");
		} else if(!$.isNumeric(no_rek)){
			alert("isi no_telp = "+no_rek+" dengan Benar !!!");
		} else {
			$.ajax({
				url : 'register.php?page=save',
				type : 'post',
				data : 'username='+username+'&password='+password+'&email='+email+'&no_telp='+no_telp+'&alamat='+alamat+'&no_rek='+no_rek,
				success : function(msg){
					alert("Silahkan anda login dengan username = "+username+" dan password yang sudah di inputkan..!!");
					window.location.href='loginmember.php';
				}
			});
		}
	});
</script>
</html>