
<html>
<head>
	<title>Update Obat</title>
</head>
<body>
	<div>
		<button id="tambah">Tambah Obat</button>
	</div><br>

	<div id="tampildata">
		<?php include "tampilobat.php";?>
	</div>
	<div id="form"></div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$("#tambah").click(function(){
		$("#form").hide().load("formtambahupdateobat.php").fadeIn(1000);
	});

	$("#form").on("click","#simpantambah",function(){
		var namaobat = $("#namaobat").val();
		var jenisobat = $("#jenisobat").val();
		var pilihobat = $("#pilihobat").val();
		var hargaobat = $("#hargaobat").val();
		var stokobat = $("#stokobat").val();

		if(namaobat == '' || hargaobat == '' || stokobat == ''){
			alert("Inputan jangan kosong...!!!");
		} else if(!$.isNumeric(hargaobat)) {
			alert("Inputan harga obat = "+hargaobat+" harus angka.!")
		} else if(!$.isNumeric(stokobat)) {
			alert("Inputan stok obat = "+stokobat+" harus angka.!")
		} else {
			$.ajax({
				url : 'prosesupdateobat.php?page=tambah',
				type : 'post',
				data : 'namaobat='+namaobat+'&jenisobat='+jenisobat+'&pilihobat='+pilihobat+'&hargaobat='+hargaobat+'&stokobat='+stokobat,
				success : function(msg){
					if(msg == 'sukses'){
						$("#tampildata").load("tampilobat.php");
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
			url : 'formeditupdateobat.php',
			type : 'post',
			data : 'id='+id,
			success : function(msg) {
				$("#form").hide().fadeIn(1000).html(msg);
			}
		});
	});

	$("#form").on("click","#simpanedit",function(){
			var namaobat = $("#namaobat").val();
			var jenisobat = $("#jenisobat").val();
			var pilihobat = $("#pilihobat").val();
			var hargaobat = $("#hargaobat").val();
			var stokobat = $("#stokobat").val();
			var idobat = $("#idobat").val();

			if(namaobat == '' || hargaobat == '' || stokobat == ''){
				alert("Inputan jangan kosong...!!!");
			} else if(!$.isNumeric(hargaobat)) {
				alert("Inputan harga obat = "+hargaobat+" harus angka.!")
			} else if(!$.isNumeric(stokobat)) {
				alert("Inputan stok obat = "+stokobat+" harus angka.!")
			} else {
				$.ajax({
					url : 'prosesupdateobat.php?page=edit',
					type : 'post',
					data : 'namaobat='+namaobat+'&jenisobat='+jenisobat+'&pilihobat='+pilihobat+'&hargaobat='+hargaobat+'&stokobat='+stokobat+'&idobat='+idobat,
					success : function(msg){
						if(msg == 'sukses'){
							$("#tampildata").load("tampilobat.php");
							$("#form").hide();
						} else {
							alert("Gagal mengedit");
						}
					}
				});
			}
	});
	
	$("#tampildata").on("click",".hapus",function(){
		var idobat = $(this).attr("id");
		var konf = confirm("Yakin anda mau menghapus penyakit ?");
		if(konf == true){
			$.ajax({
				url : 'prosesupdateobat.php?page=hapus',
				type : 'post',
				data : 'idobat='+idobat,
				success : function(msg) {
					if(msg == 'sukses'){
						$("#tampildata").load("tampilobat.php");
						$("#form").hide();
					} else {
						alert("Gagal mengedit");
					}
				}
			});
		}
	});
</script>
</html>