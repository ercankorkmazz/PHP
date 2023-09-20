	<?php
		include("login/inc/baglan.php");

		if(isset($_SESSION["$_SERVER[SERVER_NAME]uyeOturum"]))
		{
	?>
    		<a href="index.php?oturumKuye" class="btn btn-primary" style="border-radius:0;" data-original-title="Creativity-tuts">Oturum Kapat</a>
			
    <?php
		}
		else
		{
	?>
		<div class="item" style="margin:0;">
            <a href="#" onclick="return false;" class="btn btn-primary" style="border-radius:0;" data-original-title="Creativity-tuts">Giriþ Yap</a>
            	<div class="filters">
                <form id="form1" method="POST" action="index.php?oturumac">
              
                  <table border="0" style="width:180px; height:126px;">
                    <tr>
                      <td style="padding-bottom:7px;">
                      <input type="text" class="text" name="kadi" id="kadi" placeholder="Kullanýcý Adý" /></td>
                    </tr>
                    <tr>
                      <td style="padding-bottom:7px;">
                      <input type="password" class="text" name="sifre" id="sifre" placeholder="Þifre" /></td>
                    </tr>
                    <tr>
                      <td colspan="2" style="text-align:center;padding-bottom:7px;"><input type="submit" class="myButton" id="Submit" value="Giriþ Yap" /></td>
                    </tr>
                  </table>
                </form>
                </div>
		</div>
    <?php }	?>

<script>
	$(function () {
    $('.item').popover({
        placement: 'bottom',
        html: true,
        content: function () {
            return $(this).find('.filters').html();
        }
    });
    $('#count').click(function() {
        var filter = $('.item').map(function () {
            return this.value;
        }).get();

        $('#res').text(filter);
    });
});
</script>
    
