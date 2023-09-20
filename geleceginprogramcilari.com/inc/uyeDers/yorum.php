<table width="100%">
<?php
	if(isset($_GET["scratch"]))
		$ders="scratch";
	elseif(isset($_GET["arduino"]))
		$ders="arduino";
	elseif(isset($_GET["app"]))
		$ders="app";
	elseif(isset($_GET["alice"]))
		$ders="alice";
	elseif(isset($_GET["kodu"]))
		$ders="kodu";
	elseif(isset($_GET["SketchUp"]))
		$ders="SketchUp";
	
	include("login/inc/baglan.php");
	if(!isset($_GET["devam"]))
	{
		if(isset($_GET["scratch"]))
		{
			$dersID=mysql_fetch_array(mysql_query("select * from scratch where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["arduino"]))
		{
			$dersID=mysql_fetch_array(mysql_query("select * from smallbasic where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["alice"]))
		{
			$dersID=mysql_fetch_array(mysql_query("select * from alice where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["app"]))
		{
			$dersID=mysql_fetch_array(mysql_query("select * from app where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["kodu"]))
		{
			$dersID=mysql_fetch_array(mysql_query("select * from kodu where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
		elseif(isset($_GET["SketchUp"]))
		{
			$dersID=mysql_fetch_array(mysql_query("select * from sketchup where onay='1' order by id desc limit 0,1"));
			$dersID=$dersID["id"];
		}
	}
	else
		$dersID=$_GET['devam'];
		
	if(isset($_GET["yorumSil"]))
		include("inc/uyeDers/yorumSil.php");
		
	@include('inc/baglan.php');
	@mysql_query("ALTER TABLE yorumlar ORDER BY id",$baglan);
	
	$sql=@mysql_query("select * from yorumlar where dersAdi='$ders' and dersid=".$dersID);
	while($yorum=@mysql_fetch_array($sql))
	{
		$uye=@mysql_query("select * from uyelik where id=".$yorum['uyeID']);
        $alanlar=@mysql_fetch_array($uye);	
 ?>
 	 <tr>
     	<td>
		
        </td>
     	<td align="right">
			<?php 
			if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]))
			{ 
				if($yorum["uyeID"]==$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"])
				{ 
			?>
                <span style="float:left; padding-top:3px;font-size:12px;"><strong>
                    <a href="index.php?<?php echo $ders."&devam=".$dersID."&yorumSil=".$yorum["id"]; ?>" style="color:#333;text-shadow:0px 0px 1px #666;">Yorumu Sil</a>
                </strong></span>
            <?php }else echo "&nbsp;"; }else echo "&nbsp;"; ?>
            
       		<img src='img/ico_author.png' style="float:right; height:18px;margin-top:4px;"/>
            <span style="float:right;padding-right:5px;padding-top:3px;color:#333;text-shadow:0px 0px 1px #666;"><strong><?php echo $alanlar['adSoyad']; ?></strong></span>
        </td>
     </tr>
     <tr>
     	<td style="width:50px;padding-right:5px;" valign="top">
		<?php
			if(empty($alanlar['resim']))
			{
				echo "<img src='img/uye/default-user.png' style='width:50px;height:50px;' />";
			}
			else
			{
				echo "<img src='img/uye/".$alanlar['resim']."' style='width:50px;height:50px;' />";
			}
			?>
		 </td>
     	<td>
			<div style="background:#555 url(img/yorumBG.png); color:#fff;min-height:50px;padding:5px; -webkit-border-radius: 3px-moz-border-radius: 3px;border-radius: 3px;">
				<?php echo "$yorum[yorum]"; ?>
            </div>
        </td>
     </tr>
    
 <?php } ?>
 </table>
 			
<?php 
	if(isset($_POST["yorum"]))
	{
		if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
		{
			if(!empty($_POST["yorum"]))
			{
				@include('inc/baglan.php');
				$uyeId=$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"];
				$sql="insert into yorumlar (dersid,dersAdi,yorum,uyeID) values ('$dersID','$ders','$_POST[yorum]','$uyeId')";
				if(@mysql_query($sql))
				{
					setcookie("bilgi","Yorum kaydedildi.");
					setcookie("renk","#3C0");
					header("Location:index.php?$ders&devam=$dersID&#end");
				}
			}
			else
			{
				setcookie("bilgi","Yorum yazýnýz.");	
				header("Location:index.php?$ders&devam=$dersID");
			}
		}
		else
		{
			setcookie("bilgi","Yorum yapabilmek için üye giriþi yapmalýsýnýz.");	
			header("Location:index.php?$ders&devam=$dersID");
		}
	}
?>
<form action="index.php?<?php echo $ders."&devam=".$dersID; ?>" method="post" >
<table width="100%" style="margin-top:5px;"> 
  <tr>
 	 <td valign="top">
     	<?php
			include("login/inc/baglan.php");	
			$sql=@mysql_query("select * from uyelik where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]);
			$alanlar=@mysql_fetch_array($sql);
			 if(empty($alanlar["resim"]))
			 {
				$resim="default-user.png";
			 }
			 else
			 {
				$resim=$alanlar["resim"] ;
			 }
		 	
	?>
  	<img src="img/uye/<?php echo $resim; ?>" style="width:50px;height:50px;">
     </td>
     <td>
     	<textarea name="yorum" style="min-width:690px;max-width:690px;background:#333 url(img/yorumBG.png); color:#fff;margin-left:5px; min-height:50px;padding:5px; -webkit-border-radius: 3px-moz-border-radius: 3px;border-radius: 3px;" placeholder="Yorum yazýnýz."></textarea>
     </td>
     <td valign="top"> 
      <input type="submit" value="Yorum Yap" class="yorumBTN"  / >
     </td>
</table> 
</form>