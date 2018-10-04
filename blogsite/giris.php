<?php
	include "ayar/ayar.php";

if($_POST)
{
$kadi=$_POST["kadi"];
$ksifre=md5($_POST["ksifre"]);


if((!$kadi) || (!$ksifre))
{
	echo "Lüften Alanları Boş Bırakmayınız";
}else
{

	$uyegir=bul("SELECT * FROM uyeler WHERE kadi='$kadi' and ksifre='$ksifre'");
	
if($uyegir)
{
	$uyegirdi=al($uyegir);
	$_SESSION["giris"]="tamam";
	$_SESSION["kadi"]=$kadi;
	$_SESSION["krutbe"]=$uyegirdi["krutbe"];
	header("refresh:0 ;url=index.php");
	
}else
{
	echo "Kullanıcı Adı veya Şifreniz Yanlıştır <br> Lütfen Tekrar Deneyiniz <br> <a href=index.php>Ana Sayfaya Git</a>";
}
	
}
	
}else
{
	header("Location:index.php");
}
?>﻿
