	<div id="ustalan" class="sol">
    <h1 class="yonetimBaslik"><?php echo mb_convert_encoding("Yönetim Paneli", "UTF-8", "ISO-8859-9"); ?></h1>
    	<div class="sag">
            <?php if(isset($_SESSION["$_SERVER[SERVER_NAME]oturum"])){ ?>
            <div class="mbar">
     			<a href="index.php?aracfilosu"><?php echo mb_convert_encoding("Araç Filosu", "UTF-8", "ISO-8859-9"); ?></a>
     			<a href="index.php?sayfalar"><?php echo mb_convert_encoding("Sayfalar", "UTF-8", "ISO-8859-9"); ?></a>
     			<a href="index.php?hizmetler"><?php echo mb_convert_encoding("Hizmetler", "UTF-8", "ISO-8859-9"); ?></a>
     			<a href="index.php?ekstralar"><?php echo mb_convert_encoding("Ekstralar", "UTF-8", "ISO-8859-9"); ?></a>
     			<a href="index.php?transferler"><?php echo mb_convert_encoding("Transferler", "UTF-8", "ISO-8859-9"); ?></a>
     			<a href="index.php?ayarlar"><?php echo mb_convert_encoding("Ayarlar", "UTF-8", "ISO-8859-9"); ?></a>
                <a href="index.php?oturumKapat"><?php echo mb_convert_encoding("Çýkýþ Yap", "UTF-8", "ISO-8859-9"); ?></a>
            </div>
            
            <div id="dynamicmenu" style="display: none;">
                <div id="dynamicinner">
     				<a href="index.php?aracfilosu"><?php echo mb_convert_encoding("Araç Filosu", "UTF-8", "ISO-8859-9"); ?></a>
                    <a href="index.php?sayfalar"><?php echo mb_convert_encoding("Sayfalar", "UTF-8", "ISO-8859-9"); ?></a>
     				<a href="index.php?hizmetler"><?php echo mb_convert_encoding("Hizmetler", "UTF-8", "ISO-8859-9"); ?></a>
     				<a href="index.php?ekstralar"><?php echo mb_convert_encoding("Ekstralar", "UTF-8", "ISO-8859-9"); ?></a>
     				<a href="index.php?transferler"><?php echo mb_convert_encoding("Transferler", "UTF-8", "ISO-8859-9"); ?></a>
     			<a href="index.php?ayarlar"><?php echo mb_convert_encoding("Ayarlar", "UTF-8", "ISO-8859-9"); ?></a>
                    <a href="index.php?oturumKapat"><?php echo mb_convert_encoding("Çýkýþ Yap", "UTF-8", "ISO-8859-9"); ?></a>
                </div>
            </div>        	
            <div class="sol menu-sag"></div>
            <?php } else echo "<div class='clear'></div>"; ?>
        </div>
    </div>