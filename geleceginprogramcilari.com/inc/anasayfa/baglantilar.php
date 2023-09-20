<?php
	@include('login/inc/baglan.php'); 
	$sorgu=mysql_query("select * from baglantilar");
	while($alanlar=mysql_fetch_array($sorgu))
	{
?>
		<a href="<?php echo $alanlar["url"]; ?>" target="_blank" title="<?php echo $alanlar["bilgi"]; ?>"><img src="img/baglanti/<?php echo $alanlar["resim"]; ?>" alt="<?php echo $alanlar["bilgi"]; ?>"/></a>
<?php
	}
?>