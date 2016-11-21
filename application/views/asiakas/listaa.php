<h1>Asiakkaat</h1>
<table border=3>
<tr><th>Etunimi</th><th>Sukunimi</th><th>Sähköposti</th><th>Puhelin</th><th>Muokkaa</th></tr>
<?php
foreach ($asiakkaat as $rivi) 
{
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['email'].'<td>'.$rivi['puhelin'].'</td>';



	echo '<td><a href="nayta_muokattavat_asiakkaat">Muokkaa</a>';
	echo "</td></tr>";

	
}



?>




</table>

