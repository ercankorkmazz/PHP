<?php
	if($_POST["A1"]==1)
		$gunSayisi1=31;
	else if($_POST["A1"]==2)
	{
		if($_POST["Y1"]%4==0)
			$gunSayisi1=29;
		else
			$gunSayisi1=28;
	}
	else if($_POST["A1"]==3)
		$gunSayisi1=31;
	else if($_POST["A1"]==4)
		$gunSayisi1=30;
	else if($_POST["A1"]==5)
		$gunSayisi1=31;
	else if($_POST["A1"]==6)
		$gunSayisi1=30;
	else if($_POST["A1"]==7)
		$gunSayisi1=31;
	else if($_POST["A1"]==8)
		$gunSayisi1=31;
	else if($_POST["A1"]==9)
		$gunSayisi1=30;
	else if($_POST["A1"]==10)
		$gunSayisi1=31;
	else if($_POST["A1"]==11)
		$gunSayisi1=30;
	else if($_POST["A1"]==12)
		$gunSayisi1=31;
		
	if($_POST["A2"]==1)
		$gunSayisi2=31;
	else if($_POST["A2"]==2)
	{
		if($_POST["Y1"]%4==0)
			$gunSayisi2=29;
		else
			$gunSayisi2=28;
	}
	else if($_POST["A2"]==3)
		$gunSayisi2=31;
	else if($_POST["A2"]==4)
		$gunSayisi2=30;
	else if($_POST["A2"]==5)
		$gunSayisi2=31;
	else if($_POST["A2"]==6)
		$gunSayisi2=30;
	else if($_POST["A2"]==7)
		$gunSayisi2=31;
	else if($_POST["A2"]==8)
		$gunSayisi2=31;
	else if($_POST["A2"]==9)
		$gunSayisi2=30;
	else if($_POST["A2"]==10)
		$gunSayisi2=31;
	else if($_POST["A2"]==11)
		$gunSayisi2=30;
	else if($_POST["A2"]==12)
		$gunSayisi2=31;
		
	function gunSayisi($gun,$yil)
	{
		if($gun==1)
			$gunSay=31;
		else if($gun==2)
		{
			if($yil%4==0)
				$gunSay=29;
			else
				$gunSay=28;
		}
		else if($gun==3)
			$gunSay=31;
		else if($gun==4)
			$gunSay=30;
		else if($gun==5)
			$gunSay=31;
		else if($gun==6)
			$gunSay=30;
		else if($gun==7)
			$gunSay=31;
		else if($gun==8)
			$gunSay=31;
		else if($gun==9)
			$gunSay=30;
		else if($gun==10)
			$gunSay=31;
		else if($gun==11)
			$gunSay=30;
		else if($gun==12)
			$gunSay=31;	
			
		return($gunSay);
	}
?>