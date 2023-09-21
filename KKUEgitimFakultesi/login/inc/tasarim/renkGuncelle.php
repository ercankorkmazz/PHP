<?php
			if($_POST["renk"]=="- Mavi -")
				$renk="#1D82C6";
			elseif($_POST["renk"]=="- Mor -")
				$renk="#925CA2";
			elseif($_POST["renk"]=="- Yeþil -")
				$renk="#6C0";
			elseif($_POST["renk"]=="- Kýrmýzý -")
				$renk="#F00";
			elseif($_POST["renk"]=="- Turuncu -")
				$renk="#F90";
			else
				$renk="";
			
			if(!empty($renk))
			{
				@include('inc/baglan.php');
				$sql="update tasarim set renk = '$renk' where id='1'";	
				
				if (@mysql_query($sql,$baglan))
					setcookie("bildirim","Renk güncellendi!");
				else
					setcookie("bildirim","Kayit Basarisiz!");
			}
			else
				setcookie("bildirim","Renk Seçiniz!");
				
			header ("Location:index.php?tasarim");
?>