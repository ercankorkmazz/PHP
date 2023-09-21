</div>
<div class="bolum5" style="">&nbsp;</div><!-- Bölüm 5 Sonu -->
<div class="bolum6">
	<div class="icerik">
    	<div class="sol">
        &copy; 2015 Kýrýkkale &Uuml;niversitesi</div>
        <div class="sag"><a style="color:#333; text-decoration:none;"><img src="img/top.png" id="top" style="margin:10px 0 10px 0; border:0;"/></a></div>
        <div class="clear"></div>
    </div><!-- Bölüm 6 Ýçerik Sonu -->
</div><!-- Bölüm 6 Sonu -->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});

$(function() {

          $("#top").click(function() {

              // sayfamýzý kaydýran kod

              $("html,body").stop().animate({ scrollTop: "0" }, 1000);

          });

      });

      $(window).scroll(function() {

          var uzunluk = $(document).scrollTop();

          // 300 deðeri sabit bir uzunluk

          // herhangi bir elemente göre yukarý elementini 

          // aktifleþtirmek istersek o elementin top deðerini bulup

          // bu deðere göre yukarý elementini aktifleþtirebiliriz.

          // if(uzunluk < $("#alanId").position().top) gibi.

          if (uzunluk > 300) $("#top").fadeIn(500);

      });
</script>