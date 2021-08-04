<?php 
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hastane Otomasyon</title>
</head>
<body>
	<div class="hesabim_content">
		<div class="label">
			<label>ADI SOYADI</label>
			<input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad']; ?>">
		</div> 
		<br>
		<div class="label">
			<label>TC NO</label>
			<input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc']; ?>">
		</div> 
		<br>
	</div>
</body>
</html>