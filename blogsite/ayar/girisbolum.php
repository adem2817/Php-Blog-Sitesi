<?php
	if(@$_SESSION["giris"]=="tamam")
{
echo "Merhaba:";
echo $_SESSION["kadi"];
echo "<br>";
if(@!$_SESSION["krutbe"])
{
echo "Üyelik Durumu: Misafir";
}else{
echo "Üyelik Durumu: Kayıtlı Üye";
}
echo "<br><a href=cikis.php>Çıkış Yap</a>";

}else
{
?>
<form action="giris.php" method="post">
<table>
<tr>
	<td>Kullanıcı Adı:</td>
	<td><input type="text" name="kadi"></td>
</tr>
<tr>
	<td>Şifre</td>
	<td><input type="password" name="ksifre"></td>
</tr>
<tr align="right">
	<td></td>
	<td><a href="kayit.php">Kayıt Ol</a>  <input type="submit" value="Giriş Yap"></td>
</tr>
</table>
</form>
<?php } ?>