<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Hastane Otomasyonu</title>
</head>
<body>
	<header>
		<h2>Hastane Otomasyonu</h2>
	</header>
	<div class="tableOuter">
		<h1>Üye Ol</h1>
		<form action="islem.php" method="post">
			<div class="user">
				<input type="text" name="kullanici_adsoyad" placeholder="Ad Soyad">
			</div>
			<div class="user">
				<input type="text" name="kullanici_tc" placeholder="Tc Kimlik NO">
			</div>
			<div class="pass">
				<input type="password" name="kullanici_password" placeholder="Sifre">
			</div>
			<button type="submit" class="sub" id="giris" name="kullanicikaydet">Üye Ol</button>
			<br>
			<br>
		</form>
		<a href="index.php"><button type="submit" class="sub">Login sayfasına geri dön</button></a>
	</div>
</body>
</html>