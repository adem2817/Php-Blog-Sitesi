<?php
	include "../ayar/ayar.php";
?>
<table align="center">
	<tr>
		<td>Yazı Sıra</td>
		<td>Yazı Başlık</td>
		<td>Yazı İçerik</td>
		<td>İşlem</td>
	</tr>
<?php
	$kullanicisay=bul("select * from yazilar");
while($ksay=al($kullanicisay))
{
?>
<form action="yazi.php?yazi=duzenle" method="post">
	<tr>
		<td><?php echo $ksay["isira"]; ?><input  type="hidden" value="<?php echo $ksay["isira"]; ?>" name="isira"></td>
		<td><input type="text" name="ibaslik" value="<?php echo $ksay["ibaslik"]; ?>"></td>
		<td><textarea name="icerik"><?php echo $ksay["icerik"]; ?></textarea></td>
		<td><input type="submit" value="Düzenle"> | <a onclick="return confirm('Seçilen Yazı Silinsin mi?')" href="yazi.php?yazi=sil&isira=<?php echo $ksay["isira"]; ?>">Sil</a></td>
	</tr>
</form>
<?php
}
?>
</table>


<?php
if(@$_GET["yazi"]=="duzenle")
{
	$isira=$_POST["isira"];
	$ibaslik=$_POST["ibaslik"];
	$icerik=$_POST["icerik"];
	$duzenle=bul("Update yazilar SET
	ibaslik = '$ibaslik',
	icerik = '$icerik'
	where isira='$isira'",false);	
	if($duzenle)
	{
	?>
<script language="javascript">
alert("Yazı Başarılı Bir Şekilde Düzenlendi...");
window.open("../yonetici.php","_top");
</script>

<?		
	}

}elseif (@$_GET["yazi"]=="sil")	
{
	$isira=$_GET["isira"];

	$kullanicisil=bul("Delete from yazilar where isira='$isira'",false);

	if($kullanicisil)
{
	?>
	<script language="javascript">
alert("Seçilen Yazı başarıyla silindi....");
window.open("../yonetici.php","_top");
</script>
<?php
}	
}elseif(@$_GET["yazi"]=="ekle")
{
	$ibaslik=$_POST["ibaslik"];
	$icerik=$_POST["icerik"];

	$kullaniciekle=bul("INSERT INTO yazilar (ibaslik,icerik) values ('$ibaslik','$icerik')",false);
		
	if($kullaniciekle)
{
	?>
	<script language="javascript">
	alert("Yazı Başarıyla Eklenmiştir...");
	window.open("../yonetici.php","_top");
	</script>	
<?php
}
}

?>
<br><br><br><br><br>
<form action="yazi.php?yazi=ekle" method="post">
<table align="center">
	<tr>
		<td>Yazı Başlık</td>
		<td>Yazı İçerik</td>
		<td>İşlem</td>
	</tr>
	<tr>
		<td><input type="text" name="ibaslik"></td>	
		<td><textarea name="icerik"></textarea></td>
		<td><input type="submit" value="Yayınla"></td>
	</tr>
</table>
</form>




