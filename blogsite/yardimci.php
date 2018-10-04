<?php
	include "ayar/ayar.php";
if(@$_SESSION["krutbe"]=="yonetici")
{
?>﻿
<!DOCTYPE HTML>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<title>BlogSitem Yardımcı Paneli</title>
	<link rel="stylesheet" href="stil/stil.css" />
</head>
<body>
	<table class="tablo" width="100%" height="20px">
		<tr class="menu">
			 <td><img src="resimler/logo.png" style="margin-left:20px;" width="200px" height="68px" /></td>
			<td align="right">
				<table class="kullanici">
					<tr>
						<td colspan="2" align="left">Hoşgeldiniz</td>
					</tr>
					<tr>
						<td><img src="resimler/avatar.jpg" width="30px" height="30px" /></td>
						<td>
								<ul class="kmenu">
									<li>BlogSitem</li>
										<li><a href="index.php">Siteye Git</a></li>
								</ul>
						</td>
					</tr>
					
				</table>
			</td>
		</tr>
		<tr>
			<td width="200px" valign="top">
					<ul class="menu">
						<li><img src="resimler/menu.gif" width="13px" height="13px" /><a href="yardimci/ilk.php" target="icerik">AnaSayfa</a></li>
						<li><img src="resimler/menu.gif" width="13px" height="13px" /><a href="yardimci/kullanici.php" target="icerik">Kullanıcı Yönetimi</a></li>
						<li><img src="resimler/menu.gif" width="13px" height="13px" /><a href="yardimci/sayfa.php" target="icerik">Sayfa Yönetimi</a></li>
						<li><img src="resimler/menu.gif" width="13px" height="13px" /><a href="yardimci/yazi.php" target="icerik">İçerik Yönetimi</a></li>
					</ul>
			</td>
			<td valign="top">
			<div class="menu icerik">
			<span class="menuadi">Yardımcı Paneli</span>
						<hr>
				
					<!-- içerik alanı -->
<iframe style="border:0px;" width="100%" height="500px" src="yonet/ilk.php" name="icerik"></iframe>		
				<!-- içerik alanı bitiş -->
			</div>
			</td>
		</tr>
		</table>
<!-- aşağıyı silmeyiniz -->
			<div style="position:fixed; bottom:0px; right:0px; background-color:black; color:grey;">Tüm Hakkı Saklıdır &copy;  <a>Adem YILMAZ</a></div>
<!-- yukarıyı silmeyiniz -->
</body>
</html>
<?php
}
else
{
	header("location:index.php");
}
?>