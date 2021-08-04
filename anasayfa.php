<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hastane Otomasyon</title>
</head>
<body>
	<div class="adsoyad">
		<h4>Sn. <?php echo $kullanicicek['kullanici_adsoyad']; ?></h4>
	</div>
	<div class="orta_div" id="randevu_div">
		<form action="islem.php" method="POST">
			<input type="date" name="tarih">
			<select name="sehir" class="sehir">
			    <option value="0">------</option>
			    <option value="Adana">Adana</option>
			    <option value="Kayseri">Kayseri</option>
			    <option value="Istanbul">Istanbul</option>
			    <option value="Sakarya">Sakarya</option>
			    <option value="Izmir">Izmir</option>
			    <option value="Ankara">Ankara</option>
			</select>
			<select name="hastane" class="hastane">
			    <option value="0">Hastane seçin</option>
			    <option value="sehir hastanesi">şehir hast.</option>
			    <option value="ilce saglik merkezi">İlçe sağlık merkezi</option>
			    <option value="acibadem hastanesi">Acıbadem hast.</option>
			    <option value="hayat hastanesi">hayat hast.</option>
			</select>
			<select name="klinik" class="klinik">
			    <option value="0">Klinik seçin</option>
			    <option value="Goz hastaliklari">Göz hastalıkları</option>
			    <option value="ruh sagligi">Ruh sağlığı</option>
			    <option value="kbb servisi">KBB servisi</option>
			    <option value="cildiye">Cildiye servisi</option>
			</select>
			<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id']; ?>">
			<button name="randevu_kaydet">Randevu Kaydet</button>
		</form>
	</div>
	<div class="orta_div" id="ailehekimi_div">
		<h3>Aile Hekimi</h3>
		<p>Aile Hekimimize ait bir çalışma saati bulunamamıştır.</p>
	</div>
</body>
</html>
