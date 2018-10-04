<?php
	include "../ayar/ayar.php";
?>
<table align="center">
	<tr>
		<td>Site Adı</td>
		<td>Site Açıklama</td>
		<td>Site Anahtar</td>
		<td>İşlem</td>
	</tr>
<?php
	$kullanicisay=bul("select * from site");
while($ksay=al($kullanicisay))
{
?>
<form action="site.php?site=duzenle" method="post">
	<tr>
		<td><input type="text" name="sadi" value="<?php echo $ksay["sadi"]; ?>"></td>
		<td><input type="text" name="saciklama" value="<?php echo $ksay["saciklama"]; ?>"></td>
		<td>
			<input type="text" name="sanahtar" value="<?php echo $ksay["sanahtar"]; ?>">
		</td>
		<td><input type="submit" value="Ayarları Güncelle"></td>
	</tr>
</form>
<?php
}
?>
</table>


<?php
if(@$_GET["site"]=="duzenle")
{
	$sadi=$_POST["sadi"];
	$saciklama=$_POST["saciklama"];
	$sanahtar=$_POST["sanahtar"];
		
	$duzenle=bul("Update site set 
	sadi = '$sadi',
	saciklama= '$saciklama',
	sanahtar = '$sanahtar'
	where ssira= '1'",false);
	if($duzenle)
	{
	?>
<script language="javascript">
alert("Site Ayarları Başarılı Bir Şekilde Düzenlendi...");
window.open("../yonetici.php","_top");
</script>

<?php		
	}

}
?>