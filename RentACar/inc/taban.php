		<div id="foocont">
            <div class="sol" id="foother">
                <div class="footable">
            <div class="fooleft">
            <div class="foolinks">
                <a href="index.php"><?php echo $dil["anasayfa"]; ?></a>
                <a href="index.php?hakkimizda"><?php echo $dil["hakkinda"]; ?></a>
                <a href="index.php?filomuz"><?php echo $dil["filomuz"]; ?></a>
                <a href="index.php?transfer"><?php echo $dil["transfer"]; ?></a>
                <a href="index.php?kiralamaKosullari"><?php echo $dil["kiralamaKosullari"]; ?></a>
                <a href="index.php?SSS"><?php echo $dil["SSS"]; ?></a>
                <a href="index.php?iletisim"><?php echo $dil["iletisim"]; ?></a>
            </div>
            
            <span><?php echo $dil["otokiralama"]; ?> &copy; 2016 - <?php echo $dil["tunhaklarsakli"]; ?></span>
        </div>
        <div class="fooright">
            <div class="reztel2">
                <?php echo $dil["destekverezervasyon"]; ?>
                <span>-90 555 269 12 42</span>
            </div>
        </div>
 	<script>
        function bilgi(){
            notif({
				msg: "<?php echo $_COOKIE['bildirim']; ?>",
				type: "info",
				position: "center",
				multiline: true,
				timeout: 1000
			});
        }
    </script>