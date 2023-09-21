<?php 
		@include('../inc/baglan.php'); 
		$TStoplam1_1=0;
		$TStoplam1_2=0;
		$TStoplam1_3=0;
		$TStoplam1_4=0;
		$TStoplam1_5=0;
		$TStoplam2_1=0;
		$TStoplam2_2=0;
		$TStoplam2_3=0;
		$TStoplam2_4=0;
		$TStoplam2_5=0;
		$UStoplam1_1=0;	
		$UStoplam1_2=0;	
		$UStoplam1_3=0;	
		$UStoplam1_4=0;	
		$UStoplam1_5=0;	
		$UStoplam2_1=0;		
		$UStoplam2_2=0;		
		$UStoplam2_3=0;		
		$UStoplam2_4=0;		
		$UStoplam2_5=0;
		$normalToplam_1=0;
		$zamliToplam_1=0;
		$normalToplam_2=0;
		$zamliToplam_2=0;
		$normalToplam_3=0;
		$zamliToplam_3=0;
		$normalToplam_4=0;
		$zamliToplam_4=0;	
		$normalToplam_5=0;
		$zamliToplam_5=0;
		$nnToplam_1=0;
		$znToplam_1=0;
		$nnToplam_2=0;
		$znToplam_2=0;
		$nnToplam_3=0;
		$znToplam_3=0;
		$nnToplam_4=0;
		$znToplam_4=0;	
		$nnToplam_5=0;
		$znToplam_5=0;	
		$sql=mysql_query("select * from dersler where ogretmen=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
		while($alanlar=mysql_fetch_array($sql))
		{
				for($k=1;$k<=5;$k++)
				{
					$sorgu=mysql_query("select * from dersprogramlari");
					while($alan=mysql_fetch_array($sorgu))
					{
						$dizi=explode(".",$alan["g$k"]);
						if($alanlar["id"]==$dizi[1])
						{
							if(($dizi[3]==2) and $alan["saat"]>8)
							{
								if($k==1)
								{
									$zamliToplam_1++;
									$znToplam_1++;
								}
								elseif($k==2)
								{
									$zamliToplam_2++;
									$znToplam_2++;
								}
								elseif($k==3)
								{
									$zamliToplam_3++;
									$znToplam_3++;
								}
								elseif($k==4)
								{
									$zamliToplam_4++;
									$znToplam_4++;
								}
								elseif($k==5)
								{
									$zamliToplam_5++;
									$znToplam_5++;
								}
							}
							elseif(($dizi[3]==2) and $alan["saat"]<=8)
							{
								if($k==1)
								{
									$normalToplam_1++;
									$nnToplam_1++;
								}
								elseif($k==2)
								{
									$nnToplam_2++;
								}
								elseif($k==3)
								{
									$normalToplam_3++;
									$nnToplam_3++;
								}
								elseif($k==4)
								{
									$normalToplam_4++;
									$nnToplam_4++;
								}
								elseif($k==5)
								{
									$normalToplam_5++;
									$nnToplam_5++;
								}
							}
							
							if($dizi[4]=="TS")
							{
								if((($dizi[3]==1) and ($k==1)))
									$TStoplam1_1++;
								if((($dizi[3]==1) and ($k==2)))
									$TStoplam1_2++;
								if((($dizi[3]==1) and ($k==3)))
									$TStoplam1_3++;
								if((($dizi[3]==1) and ($k==4)))
									$TStoplam1_4++;
								if((($dizi[3]==1) and ($k==5)))
									$TStoplam1_5++;
								if((($dizi[3]==2) and $k==1))
									$TStoplam2_1++;
								if((($dizi[3]==2) and $k==2))
									$TStoplam2_2++;
								if((($dizi[3]==2) and $k==3))
									$TStoplam2_3++;
								if((($dizi[3]==2) and $k==4))
									$TStoplam2_4++;
								if((($dizi[3]==2) and $k==5))
									$TStoplam2_5++;
							}
							else if($dizi[4]=="US")
							{
								if((($dizi[3]==1) and ($k==1)))
									$UStoplam1_1++;
								if((($dizi[3]==1) and ($k==2)))
									$UStoplam1_2++;
								if((($dizi[3]==1) and ($k==3)))
									$UStoplam1_3++;
								if((($dizi[3]==1) and ($k==4)))
									$UStoplam1_4++;
								if((($dizi[3]==1) and ($k==5)))
									$UStoplam1_5++;
								if((($dizi[3]==2) and $k==1))
									$UStoplam2_1++;
								if((($dizi[3]==2) and $k==2))
									$UStoplam2_2++;
								if((($dizi[3]==2) and $k==3))
									$UStoplam2_3++;
								if((($dizi[3]==2) and $k==4))
									$UStoplam2_4++;
								if((($dizi[3]==2) and $k==5))
									$UStoplam2_5++;
							}
						}
					}
				}
		}
		$sql=mysql_query("select * from digerdersler where ogretmenID=".$_SESSION["$_SERVER[SERVER_NAME]derslikYonetimAkademikkID"]);
		while($alanlar=mysql_fetch_array($sql))
		{
				for($k=1;$k<=5;$k++)
				{
					$sorgu=mysql_query("select * from digerbirimler");
					while($alan=mysql_fetch_array($sorgu))
					{
						$dizi=explode("+",$alan["g$k"]);
						if($alanlar["id"]==$dizi[0])
						{
							if(($dizi[1]==2) and $alan["saat"]>8)
							{
								if($k==1)
									$zamliToplam_1++;
								elseif($k==2)
									$zamliToplam_2++;
								elseif($k==3)
									$zamliToplam_3++;
								elseif($k==4)
									$zamliToplam_4++;
								elseif($k==5)
									$zamliToplam_5++;
							}
							elseif(($dizi[1]==2) and $alan["saat"]<=8)
							{
								if($k==1)
									$normalToplam_1++;
								elseif($k==2)
									$normalToplam_2++;
								elseif($k==3)
									$normalToplam_3++;
								elseif($k==4)
									$normalToplam_4++;
								elseif($k==5)
									$normalToplam_5++;
							}
							
							if($dizi[2]=="TS")
							{
								if((($dizi[1]==1) and ($k==1)))
									$TStoplam1_1++;
								if((($dizi[1]==1) and ($k==2)))
									$TStoplam1_2++;
								if((($dizi[1]==1) and ($k==3)))
									$TStoplam1_3++;
								if((($dizi[1]==1) and ($k==4)))
									$TStoplam1_4++;
								if((($dizi[1]==1) and ($k==5)))
									$TStoplam1_5++;
								if((($dizi[1]==2) and $k==1))
									$TStoplam2_1++;
								if((($dizi[1]==2) and $k==2))
									$TStoplam2_2++;
								if((($dizi[1]==2) and $k==3))
									$TStoplam2_3++;
								if((($dizi[1]==2) and $k==4))
									$TStoplam2_4++;
								if((($dizi[1]==2) and $k==5))
									$TStoplam2_5++;
							}
							else if($dizi[2]=="US")
							{
								if((($dizi[1]==1) and ($k==1)))
									$UStoplam1_1++;
								if((($dizi[1]==1) and ($k==2)))
									$UStoplam1_2++;
								if((($dizi[1]==1) and ($k==3)))
									$UStoplam1_3++;
								if((($dizi[1]==1) and ($k==4)))
									$UStoplam1_4++;
								if((($dizi[1]==1) and ($k==5)))
									$UStoplam1_5++;
								if((($dizi[1]==2) and $k==1))
									$UStoplam2_1++;
								if((($dizi[1]==2) and $k==2))
									$UStoplam2_2++;
								if((($dizi[1]==2) and $k==3))
									$UStoplam2_3++;
								if((($dizi[1]==2) and $k==4))
									$UStoplam2_4++;
								if((($dizi[1]==2) and $k==5))
									$UStoplam2_5++;
							}
						}
					}
				}
		}
?>