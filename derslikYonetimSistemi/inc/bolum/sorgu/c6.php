<?php
	$say=1;
	$id=0;
	if(($_POST["A1"]>$_POST["A2"]) and ($_POST["A1"]-$_POST["A2"]==10) and ($_POST["A1"]==11) and ($_POST["Y1"]<$_POST["Y2"]) and ($_POST["G1"]<=$gunSayisi1) and ($_POST["G1"]>=1))
	{
		for($i=$_POST["G1"];$i<=$gunSayisi1;$i++)
		{
			if($say==8)
				$say=1;
			
			if(($say==6) or ($say==7))
				echo "<td style='width:10px;background:#CCC;'><input type='checkbox' name='$id' /></td>";
			else
				echo "<td style='width:10px;'><input type='checkbox' name='$id' /></td>";
		
			$say++;
			$id++;
		}
		for($i=1;$i<=gunSayisi(12,$_POST["Y1"]);$i++)
		{
			if($say==8)
				$say=1;
								
			if(($say==6) or ($say==7))
				echo "<td style='width:10px;background:#CCC;'><input type='checkbox' name='$id' /></td>";
			else
				echo "<td style='width:10px;'><input type='checkbox' name='$id' /></td>";
			$say++;
			$id++;
		}
	}
	 
	if(($_POST["A1"]>$_POST["A2"]) and ($_POST["A1"]-$_POST["A2"]==10) and ($_POST["A1"]==11) and ($_POST["Y1"]<$_POST["Y2"]) and ($_POST["G2"]<=$gunSayisi2) and ($_POST["G2"]>=1))
	{
		for($i=1;$i<=$_POST["G2"];$i++)
		{
			if($say==8)
				$say=1;
						
			if(($say==6) or ($say==7))
				echo "<td style='width:10px;background:#CCC;'><input type='checkbox' name='$id' /></td>";
			else
				echo "<td style='width:10px;'><input type='checkbox' name='$id' /></td>";
				
			$say++;
			$id++;
		}
	}
?>