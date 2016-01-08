<html>
<head>
	<title>Update penyakit</title>
</head>
<body>
	<div>
		<button id="tambah">Tambah Penyakit</button>
	</div><br>

	<div id="tampildata">
		<?php include "tampilpenyakit.php";?>
	</div>
	<div id="form"></div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$("#tambah").click(function(){
		$("#form").hide().load("formtambahupdatepenyakit.php").fadeIn(1000);
	});
	$("#form").on("click","#simpantambah",function(){
		var namapenyakit = $("#namapenyakit").val();
		var infopenyakit = $("#infopenyakit").val();
		var pilihpenyakit = $("#pilihpenyakit").val();

		if(namapenyakit == '' || infopenyakit == '' || pilihpenyakit == ''){
			alert("Inputan jangan kosong...!!!");
		} else {
			$.ajax({
				url : 'prosesupdatepenyakit.php?page=tambah',
				type : 'post',
				data : 'namapenyakit='+namapenyakit+'&infopenyakit='+infopenyakit+'&pilihpenyakit='+pilihpenyakit,
				success : function(msg){
					if(msg != 'sukses'){
						$("#tampildata").load("tampilpenyakit.php");
					} else {
						alert("Gagal menambahkan");
					}
				}
			});
		}
	});

	$("#tampildata").on("click",".edit",function(){
		var id = $(this).attr("id");
		$.ajax({
			url : 'formeditupdatepenyakit.php',
			type : 'post',
			data : 'id='+id,
			success : function(msg) {
				$("#form").hide().fadeIn(1000).html(msg);
			}
		});
	});

	$("#form").on("click","#simpanedit",function(){
			var namapenyakit = $("#namapenyakit").val();
			var infopenyakit = $("#infopenyakit").val();
			var pilihpenyakit = $("#pilihpenyakit").val();
			var idpenyakit = $("#idpenyakit").val();

			if(namapenyakit == '' || infopenyakit == '' || pilihpenyakit == ''){
			alert("Inputan jangan kosong...!!!");
			}  else {
				$.ajax({
					url : 'prosesupdatepenyakit.php?page=edit',
					type : 'post',
					data : 'namapenyakit='+namapenyakit+'&infopenyakit='+infopenyakit+'&pilihpenyakit='+pilihpenyakit+'&idpenyakit='+idpenyakit,
					success : function(msg){
						if(msg == 'sukses'){
							$("#tampildata").load("tampilpenyakit.php");
							$("#form").hide();
						} else {
							alert("Gagal mengedit");
						}
					}
				});
			}
	});

	$("#tampildata").on("click",".hapus",function(){
		var idpenyakit = $(this).attr("id");
		var konf = confirm("Yakin anda mau menghapus penyakit ?");
		if(konf == true){
			$.ajax({
				url : 'prosesupdatepenyakit.php?page=hapus',
				type : 'post',
				data : 'idpenyakit='+idpenyakit,
				success : function(msg) {
					if(msg == 'sukses'){
						$("#tampildata").load("tampilpenyakit.php");
						$("#form").hide();
					} else {
						alert("Gagal menghapus");
					}
				}
			});
		}
	});
</script>
</html>