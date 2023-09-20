    <div id="caption" class="duyurular" style="width:auto;border-top:none;padding-top:5px;margin-top:13px;box-shadow: #06C 0px 0px 5px 0px;">
    	<ul>
        	 <?php
				@include('login/inc/baglan.php');
				$say=0;
				$sorgu=mysql_query("select * from duyurular order by id desc");
				$say=mysql_num_rows($sorgu);
				while($alanlar=mysql_fetch_array($sorgu))
				{
                    if(empty($alanlar["url"]))
						echo "<li>".$alanlar["duyuru"]."</li>";
					else
						echo  "<li><a href='".$alanlar["url"]."'>".$alanlar["duyuru"]."</a></li>";
				}
				if($say==0)
					echo "<p style='color:#fff;padding-left:14px;'>Duyuru yok.</p>";
            ?>
        </ul>
    </div>