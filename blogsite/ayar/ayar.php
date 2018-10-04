<?php
session_start();
$baglan=mysql_connect("localhost","root","");
mysql_select_db("blogsite",$baglan);
mysql_query("SET NAMES 'utf8'");

function al($a)
{
	return mysql_fetch_array($a);
}
function bul($b,$normal=true)
{
if ($normal==true)
{
	return mysql_query($b);
}else
{
	return mysql_query($b) or die (mysql_error());
	}
}
$site=al(bul("select * from site"));

define("SiteAdi",$site["sadi"]);
define("SiteAciklama",$site["saciklama"]);
define("SiteAnahtar",$site["sanahtar"]);
define("SiteStil","/stil/stil.css");


?>
