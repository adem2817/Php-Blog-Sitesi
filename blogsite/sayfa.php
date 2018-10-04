<?php
include "ayar/ayar.php";
// header("Refresh:2 url=index.php");
if($_GET)
{
	$saysira=$_GET["saysira"];
	
		$sayfaoku=al(bul("Select * from sayfalar where saysira='$saysira'"));
	if (!$sayfaoku)
{
	header("Location:index.php");
}
		
	}
else
{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $sayfaoku["sayadi"];?> - <?php echo SiteAdi;?></title>
  <meta name="description" content="<?php echo SiteAciklama;?>">
  <meta name="keywords" content="<?php echo SiteAnahtar;?>">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="main">
<div class="page">
<div class="header">
<h1><?php echo SiteAdi;?></h1>
</div>
<div class="topmenu">
<ul>
	<li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href=index.php>Ana Sayfa</a></li>
<?php
$sayfala=bul("Select * from sayfalar");
while($sayfa=al($sayfala))
{
?>
<li><a href="sayfa.php?saysira=<?php echo $sayfa["saysira"];?>"><?php echo $sayfa["sayadi"];?></a></li>

<!--	echo "<a href=sayfa.php?saysira=".$sayfa["saysira"].">".$sayfa["sayadi"]."</a> <br>"; -->
<?php
}
?>
</ul>
</div>
<div class="content">
<div class="left-panel">
<div class="left-panel-in">

<h2 class="title"><?php echo $sayfaoku["sayadi"];?></h2>
<p>&nbsp;</p>
<p><?php echo $sayfaoku["sayicerik"];?></p>
<p>&nbsp;</p>


</div>
</div>
<div class="right-panel">
<div class="right-row1">
<h3 class="subtitle">Kullanıcı İşleri</h3>
<p>
<?php include "ayar/girisbolum.php";  ?>
</p>
</div>
</div>
</div>
<div class="footer">
<p>&copy; Copyright 2015. Tasarım ve Kodlama <a>Adem YILMAZ</a>
</p>
<div style="text-align:right;">
<?php

if(@$_SESSION["krutbe"]=="yonetici")
{
	echo "<a style=color:#fff; href=yonetici.php>Yönetici Paneli</a>  ";
	echo "  <a style=color:#fff; href=yardimci.php>Yardimci Paneli</a>";
}elseif (@$_SESSION["krutbe"]=="yardimci")
{
	echo "<a style=color:#fff; href=yardimci.php>Yardimci Paneli</a>";
}

?>
</div>
</div>
</div>
</div>
<!--DO NOT Remove The Footer Links-->
<!--Designed by--><a href="http://www.htmltemplates.net">
<img src="images/footnote_img.gif" class="copyright" alt="http://www.htmltemplates.net"></a>
<!--DO NOT Remove The Footer Links-->
</body></html>

