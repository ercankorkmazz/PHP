<div class="icerik">
  <div class="icerikSol" style="padding:0;width:690px;">
		<?php 
            @include('login/inc/baglan.php'); 
            $sorgu=mysql_query("select * from pdfler where id=".$_GET["PDF"]);
            $alanlar=mysql_fetch_array($sorgu);
        ?>
        <iframe src="<?php echo $alanlar['url']; ?>" style="width: 690px; margin-top:-1px; height: 600px;box-shadow: #d8d9db 0px 0px 8px;  " frameborder="0"></iframe>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>