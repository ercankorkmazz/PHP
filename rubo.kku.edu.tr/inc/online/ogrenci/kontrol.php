<?php

	function cezaVer()
	{
		@include("inc/inc_baglan.php");
		$sql_ceza="update kullanici set ceza = '1' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
		@mysql_query($sql_ceza,$baglan);
		
		$_SESSION["$_SERVER[SERVER_NAME]ceza"] = "1";
		header("Location:ceza");
	}
	
	
	@include("inc/inc_baglan.php");
	$sql=@mysql_query("select * from kullanici where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"]);
	$alanlar=@mysql_fetch_array($sql);
	
	$seviye = $alanlar["seviye"];

	if($seviye == "s1_1")
	{
		if($_GET["kontrol"] == 1585)
		{
			$seviye = "s1_2";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s1_1";
				@include("inc/online/ogrenci/inc_s1_1.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s1_1.php");
	}
	elseif($seviye == "s1_2")
	{
		if(isset($_POST["s1_v1"]))
		{
			if(($_POST["s1_v1"] >= 85 && $_POST["s1_v1"] <= 89) && ($_POST["s1_v2"] >= 50 && $_POST["s1_v2"] <= 54) && ($_POST["s1_v3"] >= 68 && $_POST["s1_v3"] <= 72))
			{
				$seviye = "s1_3";
				
				@include("inc/inc_baglan.php");
				$sql_s1_2="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
				
				if (@mysql_query($sql_s1_2,$baglan))
					header("Location:index.php");
				else
				{
					$seviye = "s1_2";
					@include("inc/online/ogrenci/inc_s1_2.php");
				}
			}
			else
				cezaVer();
		}
		else
			@include("inc/online/ogrenci/inc_s1_2.php");
	}
	elseif($seviye == "s1_3")
	{
		if($_GET["kontrol"] == 1805)
		{
			$seviye = "s1_4";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s1_3";
				@include("inc/online/ogrenci/inc_s1_3.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s1_3.php");
	}
	elseif($seviye == "s1_4")
	{
		if($_GET["kontrol"] == 18885)
		{
			$seviye = "s2_1";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s1_4";
				@include("inc/online/ogrenci/inc_s1_4.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s1_4.php");
	}
	elseif($seviye == "s2_1")
	{
		if(isset($_POST["s2_v1"]))
		{
			if(($_POST["s2_v1"] >= 13 && $_POST["s2_v1"] <= 23) && ($_POST["s2_v2"] >= 9 && $_POST["s2_v2"] <= 19) && ($_POST["s2_v3"] >= 95 && $_POST["s2_v3"] <= 100) && ($_POST["s2_v4"] >= 83 && $_POST["s2_v4"] <= 93) && ($_POST["s2_v5"] >= 5 && $_POST["s2_v5"] <= 15))
			{
				$seviye = "s2_2";
				
				@include("inc/inc_baglan.php");
				$sql_s2_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
				
				if (@mysql_query($sql_s2_1,$baglan))
					header("Location:index.php");
				else
				{
					$seviye = "s2_1";
					@include("inc/online/ogrenci/inc_s2_1.php");
				}
			}
			else
				cezaVer();
		}
		else
			@include("inc/online/ogrenci/inc_s2_1.php");
	}
	elseif($seviye == "s2_2")
	{
		if($_GET["kontrol"] == 2755)
		{
			$seviye = "s2_3";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s2_2";
				@include("inc/online/ogrenci/inc_s2_2.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s2_2.php");
	}
	elseif($seviye == "s2_3")
	{
		if($_GET["kontrol"] == 2787)
		{
			$seviye = "s3_1";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s2_3";
				@include("inc/online/ogrenci/inc_s2_3.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s2_3.php");
	}
	elseif($seviye == "s3_1")
	{
		if(isset($_POST["s3_v1"]))
		{
			
			@include("inc/inc_baglan.php");
			$sql_s3_1=@mysql_query("select * from kapsuller");
			$kontrol=0;
			while($alanlar=@mysql_fetch_array($sql_s3_1))
			{
				if(strtoupper($_POST["s3_v1"])==$alanlar["kod"]) 
				{
					$kontrol=1;
					
					if($alanlar["kontrol"] == 0)
					{
						setcookie("bilgi","");
						$seviye = "s3_2";
				
						@include("inc/inc_baglan.php");
						$sql_s3_1a="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
						if (@mysql_query($sql_s3_1a,$baglan))
						{
							@include("inc/inc_baglan.php");
							$sql_s3_1b="update kapsuller set kontrol = '1' where kod='$alanlar[kod]'";
							@mysql_query($sql_s3_1b,$baglan);
							
							header("Location:index.php");
						}
						else
						{
							$seviye = "s3_1";
							@include("inc/online/ogrenci/inc_s3_1.php");
						}
					}
					else
					{
						setcookie("bilgi","kapsulAktifUyarisi");
						header("Location:index.php");
					}
				}
			}
			if($kontrol==0)
				cezaVer();
		}
		else
			@include("inc/online/ogrenci/inc_s3_1.php");
	}
	elseif($seviye == "s3_2")
	{
		if($_GET["kontrol"] == 3755)
		{
			$seviye = "s4_1";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s3_2";
				@include("inc/online/ogrenci/inc_s3_2.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s3_2.php");
	}
	elseif($seviye == "s4_1")
	{
		if($_POST["s4_v1"] == "ruboG4")
		{
			$seviye = "s4_2";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s4_1";
				@include("inc/online/ogrenci/inc_s4_1.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s4_1.php");
	}
	elseif($seviye == "s4_2")
	{
		if($_GET["kontrol"] == 4701)
		{
			$seviye = "s5_1";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s4_2";
				@include("inc/online/ogrenci/inc_s4_2.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s4_2.php");
	}
	elseif($seviye == "s5_1")
	{
		if(isset($_POST["s5_v1"]))
		{
			if(($_POST["s5_v1"] >= 35 && $_POST["s5_v1"] <= 39) && ($_POST["s5_v2"] >= 51 && $_POST["s5_v2"] <= 55) && ($_POST["s5_v3"] >= 88 && $_POST["s5_v3"] <= 92))
			{
				$seviye = "s5_2";
				
				@include("inc/inc_baglan.php");
				$sql_s1_2="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
				
				if (@mysql_query($sql_s1_2,$baglan))
					header("Location:index.php");
				else
				{
					$seviye = "s5_1";
					@include("inc/online/ogrenci/inc_s5_1.php");
				}
			}
			else
				cezaVer();
		}
		else
			@include("inc/online/ogrenci/inc_s5_1.php");
	}
	elseif($seviye == "s5_2")
	{
		if($_GET["kontrol"] == 5701)
		{
			$seviye = "s6_1";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s5_2";
				@include("inc/online/ogrenci/inc_s5_2.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s5_2.php");
	}
	elseif($seviye == "s6_1")
	{
		if($_POST["s6_v1"] == "ruboG6")
		{
			$seviye = "s6_2";
			
			@include("inc/inc_baglan.php");
			$sql_s1_1="update kullanici set seviye = '$seviye' where id=".$_SESSION["$_SERVER[SERVER_NAME]kullaniciID"];
			
			if (@mysql_query($sql_s1_1,$baglan))
				header("Location:index.php");
			else
			{
				$seviye = "s6_1";
				@include("inc/online/ogrenci/inc_s6_1.php");
			}
		}
		else
			@include("inc/online/ogrenci/inc_s6_1.php");
	}
	elseif($seviye == "s6_2")
	{
		@include("inc/online/ogrenci/inc_s6_2.php");
	}
?>