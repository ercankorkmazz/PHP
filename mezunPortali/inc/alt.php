</div>
<div class="bolum5" style="">&nbsp;</div><!-- B�l�m 5 Sonu -->
<div class="bolum6">
	<div class="icerik">
    	<div class="sol">
        &copy; 2015 K�r�kkale &Uuml;niversitesi</div>
        <div class="sag"><a style="color:#333; text-decoration:none;"><img src="img/top.png" id="top" style="margin:10px 0 10px 0; border:0;"/></a></div>
        <div class="clear"></div>
    </div><!-- B�l�m 6 ��erik Sonu -->
</div><!-- B�l�m 6 Sonu -->
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});

$(function() {

          $("#top").click(function() {

              // sayfam�z� kayd�ran kod

              $("html,body").stop().animate({ scrollTop: "0" }, 1000);

          });

      });

      $(window).scroll(function() {

          var uzunluk = $(document).scrollTop();

          // 300 de�eri sabit bir uzunluk

          // herhangi bir elemente g�re yukar� elementini 

          // aktifle�tirmek istersek o elementin top de�erini bulup

          // bu de�ere g�re yukar� elementini aktifle�tirebiliriz.

          // if(uzunluk < $("#alanId").position().top) gibi.

          if (uzunluk > 300) $("#top").fadeIn(500);

      });
</script>