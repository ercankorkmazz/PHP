[
<?php
	@include('../login/inc/baglan.php'); 
	$sorgu=mysql_query("select * from slider order by id desc");
	$kontrol=0;
	$say=1;
	$kontrol=mysql_num_rows($sorgu);
	
	if($kontrol==0){?>
		{
			"content": "<div class='slide_inner'><img class='photo' src='img/slider/slider.png'></div>",
			"content_button": ""
		}
    <?php }
	else
	{
		while($alanlar=mysql_fetch_array($sorgu))
		{	
?>
            {
                "content": "<div class='slide_inner'><img class='photo' src='img/slider/<?php echo $alanlar["URL"]; ?>'></div>",
                "content_button": ""
            }
<?php 
			if($say<$kontrol)
				echo ",";
			$say++;
	}}?>
]