<h1>Kortit</h1>
<table border=1>
<tr><th>id_kortti</th><th>Pin</th><th>Saldo</th><th>asiakas id</th><th>Maksu id</th></tr>
<?php
foreach ($kortit as $rivi) 
{
	echo '<tr><td>'
	.$rivi['id_kortti'].'</td><td>'
	.$rivi['pin_kortti'].'</td><td>'
	.$rivi['saldo'].'</td><td>'
	.$rivi['asiakas_id_asiakas'].'</td><td>'
	.$rivi['maksu_id_maksu'].'</td></tr>';
}



?>




</table>