<?php 
	if(isset($_GET["sil"]) and isset($_POST["id"]))
		@include("inc/cumle/sil.php");
?>
<div style="padding:10px;">
	<form action="index.php?sil" method="post">
    <table width="100%">
        <tr>
            <td colspan="2">
                <input type="submit" value="Se�imi Sil" class="button" style="float:left;"/>
                <a href="index.php?yeni"><input type="button" value="Yeni Kay�t" class="button" style="float:right;"/></a>
            </td>
        </tr>
        <?php
			@include('inc/baglan.php'); 
			$kontrol=0;
			$sorgu=mysql_query("select * from cumleler order by id desc");
			while($alanlar=mysql_fetch_array($sorgu))
			{$kontrol=1;
		?>
        <tr>
            <td style="width:90px;"><center><input type="checkbox" name="id[]" value="<?php echo $alanlar["id"];?>" /></center></td>
            <td style="color:#FFF;"><?php echo $alanlar["cumle"]; ?></td>
        </tr>
        <?php } 
		if($kontrol==0)
			echo "<tr><td colspan=2 align=center>Hi�bir ders bulunamad�.</td></tr>";
		 ?>
    </table>
    </form>
</div>