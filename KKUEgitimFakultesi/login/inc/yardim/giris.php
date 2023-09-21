<script src="js/SpryCollapsiblePanel.js" type="text/javascript"></script>
<link href="css/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
<p class="yBaslik">Yönetim Paneli - Kullaným Klavuzu</p>

<!-- Tasarým -->
<?php for($i=1;$i<=5;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Anasayfa -->
<?php for($i=6;$i<=8;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Menüler -->
<?php for($i=9;$i<=13;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Sayfalar -->
<?php for($i=14;$i<=17;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Akademik Kadro -->
<?php for($i=18;$i<=20;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Duyurular -->
<?php for($i=21;$i<=23;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Galeri -->
<?php for($i=24;$i<=28;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Hýzlý Baðlantýlar -->
<div id="CollapsiblePanel29" class="CollapsiblePanel">
  <?php @include("29.php"); ?>
</div>

<!-- Dosya Yükleme -->
<?php for($i=30;$i<=31;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<!-- Kullanýcý Bilgileri -->
<?php for($i=32;$i<=35;$i++){?>
<div id="CollapsiblePanel<?php echo $i; ?>" class="CollapsiblePanel">
  <?php @include("$i.php"); ?>
</div>
<?php } ?>

<div style="clear:both;">&nbsp;</div>
<script type="text/javascript">
<?php for($i=1;$i<=35;$i++){?>
    var CollapsiblePanel<?php echo $i; ?> = new Spry.Widget.CollapsiblePanel("CollapsiblePanel<?php echo $i; ?>");
<?php } ?>
</script>
