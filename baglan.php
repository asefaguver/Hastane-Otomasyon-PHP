<?php

try{
	$db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charset=utf8", 'root', '1234');
	//echo 'veritabanı baglantisi basarili..';
} catch(Exception $e ){
	echo $e->getMessage();
}



?>