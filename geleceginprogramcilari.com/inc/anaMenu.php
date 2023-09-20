<header>
	<div class="logo" style="width:60px;margin-top:10px;">
    	<img src="img/logo_site.png" style="width:50px;" />
    </div>
    <div class="alan">
      <nav role='navigation' style="margin-top:11px;">
        <ul>
          <li><a class="link-0 entypo-mail" href="index.php" style="">Anasayfa</a></li>
          <li><a class="link-1" href="index.php?scratch">Scratch</a></li>
          <li><a class="link-6 entypo-mail" href="index.php?kodu">Kodu</a></li>
          <li><a class="link-4 entypo-mail" href="index.php?app">App Inventor</a></li>
          <li><a class="link-7 entypo-picture" href="index.php?SketchUp">SketchUp</a></li>
          <li><a class="link-3 entypo-user" href="index.php?arduino">Arduino S4A</a></li>
          <li><a class="link-2 entypo-picture" href="index.php?alice">Alice</a></li>
        <?php
            if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
			{
         ?>      
         	<li><a class="link-5 entypo-mail" href="index.php?profil" style="height:50px;font-size:15px;">Profil</a></li>
         <?php } ?>
         </ul>
         <ul style="margin-left:<?php if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"])) echo "144"; else echo "212";?>px;height:35px;margin-top:9px;">
         <table border="0">
             <tr>
                <td>
                <?php if(!isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"])){ ?>
                <li style="margin:0;padding:0; height:35px;">
                    <a href="index.php?uyelik" class="btn btn-primary" style="border-radius:0;">Üye Ol</a>
                </li>
                <?php } else echo "&nbsp;";?>
                </td>
                <td>
                <li style="margin:0;padding:0;height:35px;">
                    <?php include("inc/ekler/oturum.php");	?>
                </li>
                </td>
                <td>
                <li style="margin:0;padding:0;height:35px;">
                    <a href="index.php?hakkimizda" class="btn btn-primary" style="border-radius:0;">Hakkimizda</a>
                </li>
                </td>
            </tr>
        </table>
        </ul>
      <div class="clear">&nbsp;</div>
      </nav>
  </div>
</header>