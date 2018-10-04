<?php
	include "../ayar/ayar.php";
?>
<table align="center">
	<tr>
		<td>Kullanıcı Sıra</td>
		<td>Kullanıcı Adı</td>
		<td>Kullanıcı E-Posta</td>
		<td>Kullanıcı Rutbe</td>
		<td>İşlem</td>
	</tr>
<?php
	$kullanicisay=bul("select * from uyeler");
while($ksay=al($kullanicisay))
{
?>
<form action="kullanici.php?kullanici=duzenle" method="post">
	<tr>
		<td><?php echo $ksay["ksira"]; ?><input  type="hidden" value="<?php echo $ksay["ksira"]; ?>" name="ksira"></td>
		<td><input type="text" name="kadi" value="<?php echo $ksay["kadi"]; ?>"></td>
		<td><input type="text" name="kmail" value="<?php echo $ksay["kmail"]; ?>"></td>
		<td>
			<select name="krutbe">
				<option value="<?php echo $ksay["krutbe"]; ?>"><?php echo $ksay["krutbe"]; ?></option>
				<option value="yonetici">Yönetici</option>
				<option value="uye">Uye</option>
			</select>
		</td>
		<td><input type="submit" value="Düzenle"> | <a onclick="return confirm('Seçilen Üye Silinsin mi?')" href="kullanici.php?kullanici=sil&ksira=<?php echo $ksay["ksira"]; ?>">Sil</a></td>
	</tr>
</form>
<?php
}
?>
</table>


<?php
if(@$_GET["kullanici"]=="duzenle")
{
	$ksira=$_POST["ksira"];
	$kadi=$_POST["kadi"];
	$kmail=$_POST["kmail"];
	$krutbe=$_POST["krutbe"];
		
	$duzenle=bul("Update uyeler set 
	kadi = '$kadi',
	kmail = '$kmail',
	krutbe = '$krutbe'
	where ksira= '$ksira'",false);
	if($duzenle)
	{
	?>
<script language="javascript">
alert("Üye Başarılı Bir Şekilde Düzenlendi...");
window.open("../yonetici.php","_top");
</script>

<?		
	}

}elseif (@$_GET["kullanici"]=="sil")	
{
	$ksira=$_GET["ksira"];

	$kullanicisil=bul("Delete from uyeler where ksira='$ksira'",false);

	if($kullanicisil)
{
	?>
	<script language="javascript">
alert("Seçilen üye başarıyla silindi....");
window.open("../yonetici.php","_top");
</script>
<?php
}
}elseif(@$_GET["kullanici"]=="ekle")
{
	$kadi=$_POST["kadi"];
	$ksifre=md5($_POST["ksifre"]);
	$kmail=$_POST["kmail"];
	$krutbe=$_POST["krutbe"];

	$kullaniciekle=bul("INSERT INTO uyeler (kadi,ksifre,kmail,krutbe) values ('$kadi','$ksifre','$kmail','$krutbe')",false);
		
	if($kullaniciekle)
{
	?>
	<script language="javascript">
	alert("Üye Başarıyla Eklenmiştir...");
	window.open("../yonetici.php","_top");
	</script>	
<?php
}
}

?>
<br><br><br><br><br>
<form action="kullanici.php?kullanici=ekle" method="post">
<table align="center">
	<tr>
		<td>Kullanıcı Adı</td>
		<td>Kullanıcı Şifresi</td>
		<td>Kullanıcı E-Posta</td>
		<td>Kullanıcı Rütbe</td>
		<td>İşlem</td>
	</tr>
	<tr>
		<td><input type="text" name="kadi"></td>	
		<td><input type="password" name="ksifre"></td>
		<td><input type="email" name="kmail"></td>
		<td>
			<select name="krutbe">
				<option value="uye">Üye</option>
				<option value="Yonetici">Yonetici</option>
			</select>
		</td>
		<td><input type="submit" value="Üyeyi Ekle"></td>
	</tr>
</table>
</form>

