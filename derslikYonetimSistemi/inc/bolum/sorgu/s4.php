<?php
	$say=1;
	if(($_POST["A1"]>$_POST["A2"]) and ($_POST["A1"]-$_POST["A2"]==11) and ($_POST["A1"]==12) and ($_POST["Y1"]<$_POST["Y2"]) and ($_POST["G1"]<=$gunSayisi1) and ($_POST["G1"]>=1))
	{
		$gunler=NULL;
		for($i=$_POST["G1"];$i<=$gunSayisi1;$i++)
		{
			if($say==8)
				$say=1;
			
			if(($say==6) or ($say==7))
			{
				echo "<td align='center' style='background:#CCC;'><strong>$i</strong></td>";
				$gunler.=$i.".";
			}
			else
			{
				echo "<td align='center'><strong>$i</strong></td>";
				$gunler.=$i.".";
			}
			$say++;
		}
	}
	 
	if(($_POST["A1"]>$_POST["A2"]) and ($_POST["A1"]-$_POST["A2"]==11) and ($_POST["A1"]==12) and ($_POST["Y1"]<$_POST["Y2"]) and ($_POST["G2"]<=$gunSayisi2) and ($_POST["G2"]>=1))
	{
		for($i=1;$i<=$_POST["G2"];$i++)
		{
			if($say==8)
				$say=1;
											
			if(($say==6) or ($say==7))
			{
				echo "<td align='center' style='background:#CCC;'><strong>$i</strong></td>";
				$gunler.=$i.".";
			}
			else
			{
				echo "<td align='center'><strong>$i</strong></td>";
				$gunler.=$i.".";
			}				
			$say++;
		}
		$gunler=substr($gunler,0,-1);
	}
?>