<div style="padding: 50px 0px 50px 0px;">
<center>
	<img src="img/icon.png" />
    <h2 style="color:#333;text-shadow:0px 0px 40px #000;">Derslik Y�netim Sistemine Ho� Geldiniz</h2>
    <?php
		@include('inc/baglan.php'); 
    	$bolumID=$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"];
		if($bolumID=="")
			$bolum="id=1";
		else
			$bolum="bolumID=$bolumID";
			
		$sorgu=mysql_query("select * from kullanici where ".$bolum);
		$alanlar=mysql_fetch_array($sorgu);
		if(empty($alanlar["mail"]))
		{
	?>
    <hr style="margin-top:100px;" />
   	<form action="index.php?mailGuncelle" method="post">
        <table width="100%" border="0" style="margin-top:0px;">
            <tr>
                <td align="right" width="56%"><h5 style="margin:0;">Mail Adresinizi G�ncelleyiniz : </h5></td>
                <td align="left" style="width:250px;"><input type="text" name="mail" style="width:250px;font-weight:bold; text-align:center;"/></td>
                <td align="left" width="44%"><input type="submit" value="G�ncelle" /></td>
            </tr>
        </table>
   	</form>
    <hr />
    <span style="float:left;"><span style="color:red;"><strong>Uyar�:</strong> </span><strong>Kullan�c� Ad�</strong> ya da <strong>�ifre</strong>nizi unutman�z durumunda, bu adres size ula�mam�z� sa�layacakt�r.</span>
</center>
</div>
<?php }?>