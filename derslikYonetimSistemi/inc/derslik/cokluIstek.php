<?php	
	if(isset($_GET['istekGonder']) and isset($_POST['sinif']))
		@include("inc/derslik/cokluIstekKaydet.php"); // �stek Ekler
?>
 		<div class="menuAdi">
        	<div class="ad">
            <?php
            	if($_SESSION["$_SERVER[SERVER_NAME]derslikYonetimkadi"]!="admin")
				{
					if((isset($_GET["istekGonder"])) and (count($_GET) == 1))
					{
						$istekler=NULL;
						foreach($_POST["istek"] as $deger)
						{	
							$istekler .= $deger."-";
						}
						$istekler=substr($istekler,0,-1);
						setcookie("istekler",$istekler);
						setcookie("derslik",$_POST["derslik"]);
					}
			?>
            <form method="post" action="index.php?istekGonder&bildirim" target="_self">
                <input type="hidden" name="derslik" value="<?php echo $_COOKIE["derslik"]; ?>" />
            	<select name="sinif" id="jumpMenu" style="margin-top:1px; padding:5px;">
                  <option style="border-bottom:1px solid #000; background:#333; color:#FFF;">S�n�f Se�iniz</option>
                    <?php
                    	@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from bolumler where id=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
						$alanlar=mysql_fetch_array($sorgu);
						
						for($i=1;$i<=$alanlar["sure"];$i++)
							echo "<option value='$i'>$i. S�n�f</option>";
					?>
                </select>
                <select name="ders" id="jumpMenu" style="margin-top:1px; padding:5px;">
                	<option style="border-bottom:1px solid #000; background:#333; color:#FFF;">Ders Se�iniz</option>
					<?php
                    	@include('inc/baglan.php'); 
						$sorgu=mysql_query("select * from dersler where bolumID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimbolumID"]);
						while($alanlar=mysql_fetch_array($sorgu))
						{
							echo "<option value='$alanlar[id]'>$alanlar[ders]</option>";
						}
					?>
                </select>
                <select name="dTuru" id="jumpMenu" style="margin-top:1px; padding:5px;width:105px;text-align:center;">
					<option style="padding:3px;">TS</option>
                    <option style="padding:3px;">US</option>
                </select>
            	<input type="submit" value="�stek G�nder" style="padding:3px;width:110px;" />
            </form>
            <?php } ?>&nbsp;
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><a href="index.php?derslik=<?php echo $_COOKIE["derslik"]; ?>">Dersli�e D�n</a></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
