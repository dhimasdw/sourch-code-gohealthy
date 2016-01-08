
<?php
if(isset($_COOKIE['userloginadmin']) && $_COOKIE['userloginadmin'] == 'loginadmin'){
?>
<!doctype html>
<html>
<head>
	<title>Jual Obat</title>
</head>
<link rel="stylesheet" type="text/css" href="jualobat.css">
<body>
	<div id="hasilbelumdisable">
	<table>
			<tr>
				<td>Nama Konsumen</td>
				<td>:</td>
				<td><input id="namakonsumen">
				</td>
			</tr>
	</table>
</div>
	
	<div id="tabelobat">	
		<?php include "tampiljualobat.php"; ?>
	</div>
	<div id="awalaninformasiobat">
		<fieldset>
			<legend>Informasi Obat</legend>
		
		<table class="table table-hover">
			<div class="col-md-6">
		
			<tr>
				<td>Nama Obat</td>
				<td>:</td>
				<td><input disabled></td>
			</tr>
			<tr>
				<td>Jenis Obat</td>
				<td>:</td>
				<td><input disabled></td>
			</tr>
			<tr>
				<td>Pilih Obat</td>
				<td>:</td>
				<td><input disabled></td>
			</tr>
			<tr>
				<td>Harga Obat Satuan</td>
				<td>:</td>
				<td><input disabled></td>
			</tr>
			<tr>
				<td>Stok Obat</td>
				<td>:</td>
				<td><input disabled></td>
			</tr>
			<tr>
					<td>Jumlah Beli Obat Di Pilih</td>
					<td>:</td>
					<td><input value="0"></td>
			</tr>
		</div>
			<tr>
				<td></td>
				<td></td>
				<td><button id="bodoh2">Beli</button>
					<button id="bodoh">Tampilkan Data Yang Dibeli</button>
				</td>
			</tr>
		</table>
	</fieldset>
	</div>
	<div id="hasilform"></div>
	<div id="awalcoy">
		<table class="table table-hover">
		<div class="col-md-6">
			<tr>
				<td>No</td>
				<td>Nama Obat</td>
				<td>Jenis Obat</td>
				<td>Pilih Obat</td>
				<td>Harga Satuan Obat</td>
				<td>Jumlah Beli</td>
				<td>Harga Akhir</td>
			</tr>
		</div>
		</table>
	</div>
	<div id="tabeljual"></div>
	<div id="transaksi">
		<?php include "formtransaksi.php"; ?>
	</div>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
	$("#awalaninformasiobat").on("click","#bodoh",function(){
		alert("Anda belum membeli apa apa");
	});

	$("#awalaninformasiobat").on("click","#bodoh2",function(){
		alert("Anda harus pilih obat terlebih dahulu");
	});

	$("#hasilform").on("click","#tabelmuncul",function(){
		var namakonsumen = $("#namakonsumen").val();
		$.ajax({
			url : 'formjualobatdata.php',
			type : 'post',
			data : 'namakonsumen='+namakonsumen,
			success : function(msg){
				$("#awalcoy").hide();
				$("#tabeljual").hide().fadeIn(1000).html(msg);
			}
		});
	});

	$("#tabelobat").on("click",".pilihobat",function(){
		var namaobat = $(this).attr("id");
		var namakonsumen = $("#namakonsumen").val();

		if(namakonsumen == ""){
			alert("Isi nama anda dulu");
		} else {
			$.ajax({
				url : 'hasil.php',
				type : 'post',
				data : 'namaobat='+namaobat,
				success : function(msg){
					document.getElementById('namakonsumen').disabled = true;
					$("#awalaninformasiobat").hide();
					$("#hasilform").hide().fadeIn(1000).html(msg);
				}
			});
		}
	});
	
	$("#hasilform").on("click","#beli",function(){
		var namaobat = $("#namaobat").val();
		var namakonsumen = $("#namakonsumen").val();
		var jumlahbeli = $("#jumlahbeli").val();
		var hargaobatsatuan = $("#hargaobatsatuan").val();
		var pilihobat = $("#pilihobat").val();
		var hargaakhir = jumlahbeli*hargaobatsatuan;
		var jenisobat = $("#jenisobat").val();
		var stokobat = $("#stokobat").val();
		var sisastok = stokobat-jumlahbeli;

		if(jumlahbeli == ''){
			alert("Inputkan jumlah beli");
		} else if (sisastok < 0) {
			alert("Stok tidak mencukupi");
		} else if(!$.isNumeric(jumlahbeli)) {
			alert("Inputan Jumlah Beli = "+jumlahbeli+" harus angka.!");
		} else {
			$.ajax({
				url : 'prosesjualobat.php?page=inputbeli',
				type : 'post',
				data : 'sisastok='+sisastok+'&namaobat='+namaobat+'&jenisobat='+jenisobat+'&namakonsumen='+namakonsumen+'&jumlahbeli='+jumlahbeli+'&hargaobatsatuan='+hargaobatsatuan+'&pilihobat='+pilihobat+'&hargaakhir='+hargaakhir,
				success : function(msg){
					if(msg == 'sukses'){
						var totaldibayar = $("#totaldibayar").val();
						var result = parseInt(hargaakhir)+parseInt(totaldibayar);
						document.getElementById('totaldibayar').value = result;
						alert("sukses");
					} else if (msg == 'sudah'){
						alert("obat yang di beli sudah ada");
					} else {
						alert("Gagagal");
					}
				}
			});
		}
	});

	$("#transaksi").on("click","#simpan",function(){
		var namakonsumensimpan = $("#namakonsumen").val();
		var totaldibayar = $("#totaldibayar").val();
		var dibayar = $("#dibayar").val();
		var resd = parseInt(dibayar) - parseInt(totaldibayar);

		if(dibayar == 0){
			alert("Bayar dulu dong !!!");
		} else if(resd < 0){
			alert("Duitmu kurang");
		} else {
			$.ajax({
				url : 'prosesjualobat.php?page=simpan',
				type : 'post',
				data : 'namakonsumensimpan='+namakonsumensimpan+'&totaldibayar='+totaldibayar+'&dibayar='+dibayar+'&resd='+resd,
				success : function(msg){
					if(msg == 'sukses'){
						document.getElementById('kembali').disabled = true;
						document.getElementById('simpan').disabled = true;
						document.getElementById('selesai').disabled = false;
						document.getElementById('tabelmuncul').disabled = true;
						document.getElementById('jumlahbeli').disabled = true;
						document.getElementById('kembali').value = resd;
						alert("sukses");
					} else {
						alert("Gagal");
					}
				}
			});
		}
	});

	
</script>
</html>
<?php
} else {
    header("location:loginadmin.php");
}
?>
