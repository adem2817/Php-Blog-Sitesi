<?php
	include "../ayar/ayar.php";
?>
<table align="center">
	<tr>
		<td>Sayfa Sıra</td>
		<td>Sayfa Adı</td>
		<td>Sayfa İçerik</td>
		<td>İşlem</td>
	</tr>
<?php
	$kullanicisay=bul("select * from sayfalar");
while($ksay=al($kullanicisay))
{
?>
<form action="sayfa.php?sayfa=duzenle" method="post">
	<tr>
		<td><?php echo $ksay["saysira"]; ?><input  type="hidden" value="<?php echo $ksay["saysira"]; ?>" name="saysira"></td>
		<td><input type="text" name="sayadi" value="<?php echo $ksay["sayadi"]; ?>"></td>
		<td><textarea name="sayicerik"><?php echo $ksay["sayicerik"]; ?></textarea></td>
		<td><input type="submit" value="Düzenle"></td>
	</tr>
</form>
<?php
}
?>
</table>


<?php
if(@$_GET["sayfa"]=="duzenle")
{
	$saysira=$_POST["saysira"];
	$sayadi=$_POST["sayadi"];
	$sayicerik=$_POST["sayicerik"];
	$duzenle=bul("Update sayfalar SET
	sayadi = '$sayadi',
	sayicerik = '$sayicerik'
	where saysira='$saysira'",false);	
	if($duzenle)
	{
	?>
<script language="javascript">
alert("Sayfa Başarılı Bir Şekilde Düzenlendi...");
window.open("../yonetici.php","_top");
</script>

<?		
	}
}
elseif (@$_GET["sayfa"]=="sil")	
{
	$saysira=$_GET["saysira"];

	$kullanicisil=bul("Delete from sayfalar where saysira='$saysira'",false);

	if($kullanicisil)
{
	?>
	<script language="javascript">
alert("Seçilen Sayfa başarıyla silindi....");
window.open("../yonetici.php","_top");
</script>
<?php
}else
{
echo mysql_error();
}	
}elseif(@$_GET["sayfa"]=="ekle")
{
	$sayadi=$_POST["sayadi"];
	$sayicerik=$_POST["sayicerik"];

	$kullaniciekle=bul("INSERT INTO sayfalar (sayadi,sayicerik) values ('$sayadi','$sayicerik')",false);
		
	if($kullaniciekle)
{
	?>
	<script language="javascript">
	alert("Sayfa Başarıyla Eklenmiştir...");
	window.open("../yonetici.php","_top");
	</script>	
<?php
}
}

?>
<br><br><br><br><br>
<form action="sayfa.php?sayfa=ekle" method="post">
<table align="center">
	<tr>
		<td>Sayfa Adı</td>
		<td>Sayfa İçerik</td>
		<td>İşlem</td>
	</tr>
	<tr>
		<td><input type="text" name="sayadi"></td>	
		<td><textarea name="sayicerik"></textarea></td>
		<td><input type="submit" value="Yayınla"></td>
	</tr>
</table>
</form>




