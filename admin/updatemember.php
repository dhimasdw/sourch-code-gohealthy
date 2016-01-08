<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<html>

<head>
	<title>Member</title>
</head>
<body>
	<div id="tampildata">
		<?php include "tampilmember.php";?>
	</div>
	<div id="form"></div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<div class="box">	
	<div class="box-body table-responsive no-padding">
	<script type="text/javascript">
	$("#tabel").on("click",".hapus",function(){
		var idmember = $(this).attr("id");
		var konf = confirm("Yakin anda mau menghapus member ?");
		if(konf == true){
			$.ajax({
				url : 'prosesmember.php?page=hapus',
				type : 'post',
				data : 'idmember='+idmember,
				success : function(msg) {
					if(msg == 'sukses'){
						$("#tabel").load("tampilmember.php");
						$("#form").hide();
					} else {
						alert("Gagal mengedit");
					}
				}
			});
		}
	});
	</script>
	</div>
</div>
</html>
<?php
} else {
    header("location:loginadmin.php");
}
?>