<?php
include "ayar/ayar.php";
// header("Refresh:2 url=index.php");
?>
<style type="text/css">
.orta
{
	width:300px;
	heigth:400px;
	position:absolute;
	left:50%;
	top:50%;
	margin-left:-150px;
	margin-top:-200px;
}
</style>
<?php
	if(@$_GET["kayit"]=="ol")
{
	$kadi=$_POST["kadi"];
	$ksifre=$_POST["ksifre"];
	$ksifre=md5($ksifre);
	$kmail=$_POST["kmail"];
	$krutbe="uye";

	$uyegetir=bul("select * from uyeler where kadi='$kadi'  or kmail='$kmail'",false);
	
	if($uyegetir)
	{
	?>
	<script type="text/javascript">
	alert("Böyle Bir Kullanıcı Adı ve E-Posta ile Kayıtlı Üye Zaten var...");
	</script>
	<?php
	}else{
	
	
	if(!$kadi || !$ksifre || !$kmail)
	{
	?>
<script>
	alert("Lüften Tüm Alanları Doldurunuz...");
	window.open("kayit.php","_top");
</script>
<?php
	}else{

		$kayit=bul("INSERT INTO uyeler (kadi,ksifre,kmail,krutbe) values ('$kadi','$ksifre','$kmail','$krutbe')",false);

if($kayit)
{
	?>
<script>
	alert("Kayıdınız Başarılı Bir Şekilde Oluşmuştur... \n Lütfen Giriş Yapınız..");
	window.open("index.php","_top");
</script>
<?php
}		


		}
		
}
}

?>
<div class="orta">
<h2 class="title">Siteye Kayıt Ol</h2>
<p>
<form action="kay.php?kayit=ol" method="post">
<table heigth="300px">
	<tr>
		<td>Kullanıcı Adı:</td>
		<td><input type="text" name="kadi"></td>
	</tr>
	<tr>
		<td>Kullanıcı Şifresi:</td>
		<td><input type="password" name="ksifre"></td>
	</tr>
	<tr>
		<td>Kullanıcı E-Posta:</td>
		<td><input type="text" name="kmail"></td>		
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Kayıt Ol"></td>
	</tr>
</table>
</from></p>
<p>&nbsp;</p>
</div>