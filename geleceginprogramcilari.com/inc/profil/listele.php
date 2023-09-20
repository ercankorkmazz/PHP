<?php
	if(isset($_GET["profil"]) and isset($_FILES["dosya"]))
		include("inc/profil/guncelle/foto.php");
		
	if(isset($_GET["profil"]) and isset($_POST["kadi"]))
		include("inc/profil/guncelle/kadi.php");
		
	if(isset($_GET["profil"]) and isset($_POST["mSifre"]))
		include("inc/profil/guncelle/sifre.php");
	
	if(isset($_GET["profil"]) and isset($_POST["eposta"]))
		include("inc/profil/guncelle/eposta.php");
		
	include("login/inc/baglan.php");	
	$sql=@mysql_query("select * from uyelik where id=".$_SESSION["$_SERVER[SERVER_NAME]uyeOturumID"]);
	$alanlar=@mysql_fetch_array($sql);
?>
<div id="menu" style="padding-bottom:10px;">
<div id="resim" style="float:left;">
	<?php
   		 if(empty($alanlar["resim"]))
		 {
			$resim="default-user.png";
		 }
		 else
		 {
			$resim=$alanlar["resim"] ;
		 }
		 	
	?>
  	<img src="img/uye/<?php echo $resim; ?>" style="width:120px;height:120px;">
   <div id="button">
       <a href="#basicModal"role="button" style="display:block;border:1px solid #555;margin-top:10px;color:#FFF;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;background:url(img/overlay.png);" data-toggle="modal">
            <img src="img/fmakinesi_icon.png" style="width:40px;height:30px;margin:5px;">Güncelle
       </a>
   </div>
</div>
<form method="post" target="_self" action="index.php?profil" enctype="multipart/form-data">
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h3 class="modal-title" id="myModalLabel" style="color:black;">Fotoðraf Güncelle</h3>
            </div>
            <div class="modal-body" style="padding-top:0;">
                <h4 style="color:black;font-size:12px;font-weight:bold;">Önerilen Boyutlar (Geniþlik: 120px , Yükseklik: 120px)</h4>
    				<div class="yukle">
        				<input type="file" class="textbox" name="dosya" style="width:100%;border:0;text-align:left; color:black;" />
        			</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Çýkýþ</button>
                <button type="submit" class="btn btn-primary">Kaydet</button>
            </div>
         </div>
    </div>
 </div>
 </form>
 <div id="bilgiler" style="float:left;padding-left:60px;margin:-10px;">
 	<h3 style="color:#FFF;font-size:20px;padding:0px;text-shadow:#000 0px 0px 2px;">Kullanýcý Bilgileri</h3><hr style="margin:0;" />
    	<h4 style="color:#FFFFFF;background:url(img/bg_mavi.png);padding:7px;font-size:15px;margin-right:80px;text-shadow:#000 0px 0px 2px;">Kullanýcý Adý Güncelle</h4>
        <div style="margin-top:-9px;">
             <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample" style="margin-left:400px;margin-top:-35px;background:url(img/overlay.png);border:0;">
              Düzenle
            </a>
            <div class="collapse" id="collapseExample1">
              <div class="well" style="margin-top:10px;">
                <div class="yukle" style="width:425px;">
                <form method="post" target="_self" action="index.php?profil">
                	<table border="0" style="margin-left:35px;">
                    	<tr>
                        	<td style="width:130px;">
                    			<h5>Ad Soyad</h5>
                            </td>
                			<td>
                            	<input type="text" class="textbox" name="adSoyad" value="<?php echo $alanlar['adSoyad'] ?>" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                    			<h5>Kullanýcý Adý</h5>
                            </td>
                			<td>
                            	<input type="text" class="textbox" name="kadi" value="<?php echo $alanlar['kadi'] ?>" style="font-weight:bold;"/>
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<button type="submit" name="kaydet" class="Button" style="margin-top:10px;">Güncelle</button>
                            </td>
                        </tr>
                    </table>
                 </form>
                 </div>
              </div>
            </div>
            </div>
        <h4 style="color:#FFFFFF;background:url(img/bg_mavi.png);padding:7px;font-size:15px;margin-right:80px;text-shadow:#000 0px 0px 2px;">Þifre Güncelle</h4>
        <div style="margin-top:-9px;">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample" style="margin-left:400px;margin-top:-35px;background:url(img/overlay.png);border:0;">
              Düzenle
            </a>
            <div class="collapse" id="collapseExample2">
              <div class="well" style="margin-top:10px;padding-bottom:10px;">
              	<div class="yukle">
                <form method="post" target="_self" action="index.php?profil">
                    <table border="0" style="margin-left:35px;">
                    	<tr>
                        	<td style="width:130px;">
                    			<h5>Mevcut Þifre</h5>
                            </td>
                			<td>
                            	<input type="password" class="textbox" name="mSifre" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                    			<h5>Yeni Þifre</h5>
                            </td>
                			<td>
                            	<input type="password" class="textbox" name="ySifre" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                    			<h5>Yeni Þifre Tekrar</h5>
                            </td>
                			<td>
                            	<input type="password" class="textbox" name="tSifre" />
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<button type="submit" name="kaydet" class="Button" style="margin-top:10px;">Güncelle</button>
                            </td>
                        </tr>
                    </table>
                </form>
              	</div>
              </div>
            </div>
    	</div>
        <h4 style="color:#FFFFFF;background:url(img/bg_mavi.png);padding:7px;font-size:15px;margin-right:80px;text-shadow:#000 0px 0px 2px;">E-Posta Güncelle</h4>
    	<div style="margin-top:-9px;">
		<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample3" aria-expanded="false" aria-controls="collapseExample" style="margin-left:400px;margin-top:-35px;background:url(img/overlay.png);border:0;">
              Düzenle
            </a>            
            <div class="collapse" id="collapseExample3">
              <div class="well" style="margin-top:10px;margin-bottom:0;">
              	<div class="yukle" style="width:425px;">
                <form method="post" target="_self" action="index.php?profil">
                    <table border="0" style="margin-left:35px;">
                    	<tr>
                        	<td style="width:130px;">
                    			<h5>E-Posta Adresi</h5>
                            </td>
                			<td>
                            	<input type="text" name="eposta" class="textbox" value="<?php echo $alanlar['email'] ?>"/>
                            </td>
                        </tr>
                        <tr>
                        	<td colspan="2">
                            	<button type="submit" name="kaydet" class="Button" style="margin-top:10px;">Güncelle</button>
                            </td>
                        </tr>
                    </table>
                </form>
        		</div>
        	</div>
      	</div>
   	</div>
 </div>
 <div class="clear"></div>
</div>


 
 