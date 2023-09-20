[
<?php
	@include('../login/inc/baglan.php'); 
	$sorgu=mysql_query("select * from slider");
	$kontrol=0;
	$say=1;
	$kontrol=mysql_num_rows($sorgu);
	
	if($kontrol!=0)
	{
		while($alanlar=mysql_fetch_array($sorgu))
		{	
?>
            {
                "content": "<div class='slide_inner'><img class='photo' src='img/slider/<?php echo $alanlar["resim"]; ?>'></div>",
                "content_button": ""
            }
<?php 
			if($say<$kontrol)
				echo ",";
			$say++;
	}}?>
]