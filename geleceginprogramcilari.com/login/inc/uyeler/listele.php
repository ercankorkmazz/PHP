<?php 	
	if(isset($_GET["uyeler"]) and isset($_POST["coklu"]))
		@include("inc/uyeler/uyeSil.php"); // Üye siler
?>
    <form method="post" action="index.php?uyeler" target="_self">
    	<h4 style="float:left;">Üyeler</h4>
        <input type="submit" value="Seçili Üyeleri Sil" class="Button" style="float:right;" />
        <div class="clear"></div>
        <table width="100%" border="0" cellspacing="5" cellpadding="7" class="table"> 
            <tr>
                <td>&nbsp;</td>
                <td style="color:#FFF;"><strong>Resim</strong></td>
                <td style="color:#FFF;"><strong>Adý Soyadý</strong></td>
                <td style="color:#FFF;"><strong>E-Posta Adresi</strong></td>
            </tr>
			<?php
				@include('inc/baglan.php'); 
				$sorgu=mysql_query("select * from uyelik");
				while($alanlar=mysql_fetch_array($sorgu))
				{
					if(empty($alanlar["resim"]))
						$resim="default-user.png";
					else
						$resim=$alanlar["resim"];
			?>
            <tr>
                <td style="width:20px;"><input name='coklu[]' type='checkbox' value="<?php echo $alanlar['id'] ?>"  /></td>
                <td style="color:#FFF;width:120px;">
                	<a href="../img/uye/<?php echo $resim ;?>" style="border:0;margin:0;padding:0;" target="_blank">
                    	<img src="../img/uye/<?php echo $resim ;?>" style="width:120px;height:120px;" />
                    </a>
                </td>
                <td style="color:#FFF;width:320px;"><?php echo $alanlar["adSoyad"] ;?></td>
                <td style="color:#FFF;"><?php echo $alanlar["email"] ;?></td>
            </tr>
            <?php } ?>
        </table>
    </form>