<?php 
ob_start();
session_start();
include 'baglan.php';

$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor->execute(['kullanici_tc'=>$_SESSION['userkullanici_tc']]);
$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

if($say==0){
	header('location:index.php?izinsiz');
	exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Hastane Otomasyon</title>
</head>
<body>

	<!--<div class="ust_bar">
		<a href="anasayfa.php"><h1>Hastane Otomasyon</h1></a>
		<div class="menu">
			<a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
			<a href="randevu.php"><h5>Randevular</h5></a>
		</div>
	</div>

	<div class="cikis">
		Çıkış Yap
	</div> -->

<ul>
  <li><a href="anasayfa.php">Hastane otomasyon</a></li>
  <li><a href="hesap.php">Hesap Bilgileri</a></li>
  <li><a href="randevu.php">Randevular</a></li>
  <li style="float:right"><a class="active" href="logout.php">Çıkış Yap</a></li>
</ul>


</body>
</html>