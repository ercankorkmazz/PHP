<div class="icerik">
  <div class="icerikSol">
  <?php
  	if(count($_POST)>0)
	{
		$bolumNo="";
		$yil="";
		
		if($_POST["bolumNo"]!=0)
			$bolumNo=" and bolumNo='".$_POST["bolumNo"]."'";
		
		
		if(!empty($_POST["yil"]))
			$yil=" and mezuniyetYili='".$_POST["yil"]."'";
	}
  
  	@include('inc/baglan.php'); 
    $sorgu=mysql_query("select * from mezun where calismaDurumu='0' and kID!=''$bolumNo$yil");
    $issiz=mysql_num_rows($sorgu);
	
	$sorgu=mysql_query("select * from mezun where calismaDurumu='1' and departman='0'$bolumNo$yil");
    $ozelCalisanSayi=mysql_num_rows($sorgu);
	
	$sorgu=mysql_query("select * from mezun where calismaDurumu='1' and departman='1'$bolumNo$yil");
    $kamuCalisanSayi=mysql_num_rows($sorgu);
  ?>
	  <script type='text/javascript'>
          google.load('visualization', '1', {packages:['imagepiechart']});
          google.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Task');
            data.addColumn('number', 'Hours per Day');
            data.addRows(3);
            data.setValue(0, 0, "Ýþsiz <?php echo $issiz;?> kiþi");
            data.setValue(0, 1, <?php echo $issiz;?>);
            data.setValue(1, 0, "Kamuda çalýþan <?php echo $kamuCalisanSayi;?> kiþi");
            data.setValue(1, 1, <?php echo $kamuCalisanSayi;?>);
            data.setValue(2, 0, 'Özelde çalýþan <?php echo $ozelCalisanSayi;?> kiþi');
            data.setValue(2, 1, <?php echo $ozelCalisanSayi;?>);
    
            var chart = new google.visualization.ImagePieChart(document.getElementById('grafik_div'));
            chart.draw(data, {width: 450, height: 300, title: 'Sayýsal Veriler'});
          }
        </script> 
    <div class="giris">
    <table border="0" width="100%">
    	<tr>
        	<td style="width:480px;"><div id="grafik_div"></div></td>
            <td align="right" valign="top">
            	<form action="index.php?istatistikler" method="post">
                    <select name="bolumNo" style="width:154px;margin:0;padding:2px; border:1px dashed #666; margin-bottom:10px;">
                      <option value="0" style="background:#333;border-bottom:1px solid #000;color:#FFF;">&#8212; Bölüm Seçiniz &#8212;</option>
                      <?php 
			  	@include('inc/baglan.php');
				$sql=@mysql_query("select * from bolumler",$baglan);
				while($bolumler=@mysql_fetch_array($sql))
				{
			  ?>
        	  		<option value="<?php echo $bolumler['id']; ?>" <?php if($alanlar["bolumNo"]==$bolumler['id']) echo "selected='selected'";?>><?php echo $bolumler['bolumAdi']; ?></option>
              <?php } ?>
                  </select>
                    <input type="text" name="yil" placeholder="Mezuniyet Yýlý" style="border:1px dashed #666; width:150px; text-align:center;"/>
                    <input type="submit" value="Sorgula" class="button" style="margin-top:10px;padding:0; background:#F00; color:#FFF; width:155px;"/>
                </form>
            </td>
        </tr>
    </table>
    </div>
  </div>
  <?php @include("inc/icerikSag.php");?>
</div>