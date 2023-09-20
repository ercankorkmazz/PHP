<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
    <div class="superr" style="margin-left:0;">
    	<div style="color:#e6567a;font-weight:bold;margin-top:-10px;">Son Eklenen Dersler</div>
    </div>
    <div id="accordian" style="margin-top:-5px;">
        <ul>
            <li class="active">
                <h3 class="B">Scratch</h3>
                <ul>
                	<?php
						include("login/inc/baglan.php");
						$bul=mysql_query("select * from scratch where onay='1' order by id desc limit 0,4");
						while($veri=mysql_fetch_array($bul))
						{
                	?>
                    		<li><a href="index.php?scratch&devam=<?php echo $veri["id"]; ?>"><?php echo $veri["baslik"]; ?></a></li>
                	<?php } ?>
                </ul>
            </li>
            <li>
                <h3 class="K">Kodu</h3>
                <ul>
                    <?php
						$bul=mysql_query("select * from kodu where onay='1' order by id desc limit 0,4");
						while($veri=mysql_fetch_array($bul))
						{
                	?>
                    		<li><a href="index.php?kodu&devam=<?php echo $veri["id"]; ?>"><?php echo $veri["baslik"]; ?></a></li>
                	<?php } ?>
                </ul>
            </li>
            <li>
                <h3 class="I">App Inventor</h3>
                <ul>
                    <?php
						$bul=mysql_query("select * from app where onay='1' order by id desc limit 0,4");
						while($veri=mysql_fetch_array($bul))
						{
                	?>
                    		<li><a href="index.php?app&devam=<?php echo $veri["id"]; ?>"><?php echo $veri["baslik"]; ?></a></li>
                	<?php } ?>
                </ul>
            </li>
            <li>
                <h3 class="SU">SketchUp</h3>
                <ul>
                    <?php
						$bul=mysql_query("select * from sketchup where onay='1' order by id desc limit 0,4");
						while($veri=mysql_fetch_array($bul))
						{
                	?>
                    		<li><a href="index.php?SketchUp&devam=<?php echo $veri["id"]; ?>"><?php echo $veri["baslik"]; ?></a></li>
                	<?php } ?>
                </ul>
            </li>
            <li>
                <h3 class="S">Arduino S4A</h3>
                <ul>
                    <?php
						$bul=mysql_query("select * from smallbasic where onay='1' order by id desc limit 0,4");
						while($veri=mysql_fetch_array($bul))
						{
                	?>
                    		<li><a href="index.php?arduino&devam=<?php echo $veri["id"]; ?>"><?php echo $veri["baslik"]; ?></a></li>
                	<?php } ?>
                </ul>
            </li>
            <!-- we will keep this LI open by default -->
            <li>
                <h3 class="A">Alice</h3>
                <ul>
                    <?php
						$bul=mysql_query("select * from alice where onay='1' order by id desc limit 0,4");
						while($veri=mysql_fetch_array($bul))
						{
                	?>
                    		<li><a href="index.php?alice&devam=<?php echo $veri["id"]; ?>"><?php echo $veri["baslik"]; ?></a></li>
                	<?php } ?>
                </ul>
            </li>
        </ul>
    </div>
    <?php if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"])) { ?>
    <div class="duyurular" style="width:auto;margin-top:20px;">
    <form action="index.php" method="post">
        <table border="0" width="100%">
            <tr>
                <td>
                  <select name="dersEkle" style="width:200px; font-weight:bold; color:#FFF; text-shadow:#000 0px 0px 2px; padding-left:10px; height:35px; background:rgba(0,0,0,0.6);border:0;box-shadow: #06C 0px 0px 5px 0px;border:0;">
                    <option value="1" style="padding:5px 5px 5px 10px;background:#eac14d;border:0;font-weight:bold;">Scratch</option>
                    <option value="5" style="padding:5px 5px 5px 10px;background:#09F;border:0;">Kodu</option>
                    <option value="4" style="padding:5px 5px 5px 10px;background:#5bd999;border:0;">App Inventor</option>
                    <option value="6" style="padding:5px 5px 5px 10px;background:#9C3;border:0;">SketchUp</option>
                    <option value="2" style="padding:5px 5px 5px 10px;background:#99d;border:0;">Arduino S4A</option>
                    <option value="3" style="padding:5px 5px 5px 10px;background:#e6567a;border:0;">Alice</option>
                </select>
               </td>
               <td>
                <input type="submit" value="Ders Ekle" class="anasayfaBTN" />
               </td>
           </tr>
        </table>
    </form>
    </div>
    <?php } ?>
 <script>
        /*jQuery time*/
$(document).ready(function(){
	$("#accordian h3").click(function(){
		//slide up all the link lists
		$("#accordian ul ul").slideUp();
		//slide down the link list below the h3 clicked - only if its closed
		if(!$(this).next().is(":visible"))
		{
			$(this).next().slideDown();
		}
	})
})
</script>