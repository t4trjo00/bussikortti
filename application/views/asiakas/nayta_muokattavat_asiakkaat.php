<h1>Muokkaa asiakkaiden tietoja</h1>
<form action="muokkaa_asiakkaat" method="POST">
<TABLE>
<tr><th>Etunimi</th><th>Sukunimi</th><th>Email</th><th>Puhelin</th></tr>

<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>';
	echo '<input type="text" name="en[]" value="'.$rivi['etunimi'].'"></td>';
	echo '<td><input type="text" name="sn[]" value="'.$rivi['sukunimi'].'"></td>';
	echo '<td><input type="text" name="em[]" value="'.$rivi['email'].'"></td>';
	echo '<td><input type="text" name="pn[]" value="'.$rivi['puhelin'].'"></td>';
	echo '<input type="hidden" name="id[]" value="'.$rivi['id_asiakas'].'">';
	echo '</tr>';
}


?>


</TABLE>
<a href="asiakas"><BUTTON>Peruuta</BUTTON></a>

<input type="submit" name="btnTallenna" value="Tallenna">




</form>
