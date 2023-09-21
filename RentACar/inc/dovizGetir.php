<?php
	function dovizGetir($miktar, $gelenTur, $gidecekTur)
	{
		$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
		
		$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
		$usd_selling = $connect_web->Currency[0]->BanknoteSelling;
		 
		$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
		$euro_selling = $connect_web->Currency[3]->BanknoteSelling;
		
		if($gelenTur == 1)
		{
			if($gidecekTur == 2)
				$gidenMiktar = $miktar * (1/(float)$euro_buying);
			else if($gidecekTur == 3)
				$gidenMiktar = $miktar * (1/(float)$usd_buying);
		}
		else if($gelenTur == 2)
		{
			if($gidecekTur == 1)
				$gidenMiktar = $miktar * (float)$euro_buying;
		}
		else if($gelenTur == 3)
		{
			if($gidecekTur == 1)
				$gidenMiktar = $miktar * (float)$usd_buying;
		}
		
		return number_format((float)$gidenMiktar, 2, '.', '');	
	}
	/*echo dovizGetir(10, 2, 1);
	echo '1 USD Alýþ = '.$usd_buying.' TL<br>1 USD Satýþ = '.$usd_selling.' TL<br>';
	echo '1 EUR Alýþ = '.$euro_buying.' TL<br>1 EUR Satýþ = '.$euro_selling." TL<br><br>";
	
	echo '1 TL Alýþ = '.(1/(float)$usd_buying).' USD<br>1 TL Satýþ = '.(1/(float)$usd_selling).' USD<br>';
	echo '1 TL Alýþ = '.(1/(float)$euro_buying).' EUR<br>1 TL Satýþ = '.(1/(float)$euro_selling)." EUR<br>";
	
	echo "Deðer= ".number_format((float)$usd_buying, 2, '.', '');*/
?>