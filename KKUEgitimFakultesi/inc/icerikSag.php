	<div class="icerikSag">
    	<div class="ust" style="-moz-border-radius:2px; border-radius:2px;">
        	<form method="post" action="index.php?arama" style="">
                <input type="text" name="ara" value="Arama yapýn." id="araTXT" onclick="arama();" onblur="if(this.value=='')this.value='Arama yapýn.'; araOut();" class="araTxt"/>
                <input type="image" src="img/ara.png" id="araBtn" onclick="araBtn();" onblur="araOut();" class="araBtn" />
            </form>
        </div>
    </div>
    <div class="icerikSag">
    	<div class="ust">Hýzlý Baðlantýlar</div>
        <div class="alt">
          <ul>
          	<?php
				@include('login/inc/baglan.php'); 
				$sorgu=mysql_query("select * from faydalilinkler");
				while($alanlar=mysql_fetch_array($sorgu))
				{
			?>
            	<li><a href="<?php echo $alanlar['link']; ?>" target="_blank"><?php echo $alanlar['baslik']; ?></a></li>
            <?php }?>
          </ul>
          <div class="galeri"><a href="index.php?albumler" target="_self">Galeri</a></div>
          <?php
				@include('login/inc/baglan.php'); 
				$sorgu=mysql_query("select * from tasarim where id=1");
				$alanlar=mysql_fetch_array($sorgu);
			?>
              <div class="facebook"><a href="<?php echo $alanlar['facebook']; ?>" target="_blank">Facebook</a></div>
              <div class="twitter"><a href="<?php echo $alanlar['twitter']; ?>" target="_blank">Twitter</a></div>
        </div>
    </div>
    <div class="clear"></div>
    <script type="text/javascript">
		function arama() {
			document.getElementById("araTXT").value = '';
			document.getElementById("araTXT").style.boxShadow = '<?php echo $alanlar['renk']; ?> 0px 0px 5px 1px';
			document.getElementById("araBtn").style.boxShadow = '<?php echo $alanlar['renk']; ?> 0px 0px 5px 1px';
		}
		function araBtn() {
			document.getElementById("araBtn").style.boxShadow = '<?php echo $alanlar['renk']; ?> 0px 0px 5px 1px';
		}
		function araOut() {
			document.getElementById("araTXT").style.boxShadow = 'none';
			document.getElementById("araBtn").style.boxShadow = 'none';
		}
	</script>