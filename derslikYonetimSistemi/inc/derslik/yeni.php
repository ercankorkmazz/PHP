<?php
	if(isset($_GET["yeniDerslik"]) and isset($_POST['derslikAdi']))
		@include("inc/derslik/kaydet.php"); // Kaydeder
?>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>

<form method="post" target="_self" action="index.php?yeniDerslik">
        <div class="menuAdi">
        	<div class="ad">
            	<h3>Derslikler / <span style="font-size:11px;">Yeni Derslik</span></h3>
            </div><!-- ��erik Sa� Ba�l�k Sol son -->
            <div class="link">
            	<ul>
                	<li><input type="submit" value="Kaydet" /></li>
                </ul>
            </div><!-- ��erik Sa� Ba�l�k Sa� son -->
            <div class="clear"></div>
        </div><!-- Men� Ba�l��� son -->
        <table border="0" width="99%" cellspacing="5" cellpadding="7">
            <tr>
                <td colspan="2"><h3>Derslik Ad�</h3></td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" name="derslikAdi" style="width:99%;padding:5px;"></td>
            </tr>
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Derslik T�r� :</h3></td>
                <td><select name="turu" id="jumpMenu" style="width:100%;padding:5px;">
                  <option value="1">S�n�f</option>
                  <option value="2">Laboratuvar</option>
                  <option value="3">Amfi</option>
                </select></td>
            </tr>
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Ki�i Say�s� :</h3></td>
                <td><input type="text" name="kisi" style="width:98.7%;padding:5px;"></td>
            </tr>  
            
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Yeri :</h3></td>
                <td><input type="text" name="yeri" style="width:98.7%;padding:5px;"></td>
            </tr>  
            
            <tr>
            	<td style="width:150px; text-align:right;"><h3>Teknik �zellikleri :</h3></td>
                <td><textarea name="ozellik"></textarea></td>
            </tr>            
        </table>
</form>