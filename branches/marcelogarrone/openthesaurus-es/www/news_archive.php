<?php
include("include/phplib/prepend.php3");
$cancel_login = 1;
page_open(array("sess" => "Thesaurus_Session", "auth" => "Thesaurus_Default_Auth"));
include("include/tool.php");
$db = new DB_Thesaurus;

$title = T_("OpenThesaurus - News Archiv");
include("include/top.php");
?>

<table border="0" cellpadding="2" cellspacing="5">


<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-09-29</span></td>
	<td valign="top">Canal IRC: #openthesaurus-es (irc.freenode.net)</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2006-09-12</span></td>
	<td valign="top">Actualizaci&oacute;n del portal OpenThesaurus-es</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2005-12-16</span></td>
	<td valign="top">Volvimos a estar al servicio. Gracias a toda la comunidad. </td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-11-13</span></td>
	<td valign="top"><b>Actualizaciones</b><br>
 	1. Gracias a Nestor, se agreg&oacute; algo m&uacute;y &uacute;til y pr&aacute;ctico a la hora de ingresar sin&oacute;nimos. Antes uno ten&iacute;a que hacer un clic en el casillero para luego agregar la palabra, algo no muy pr&aacute;ctico.<br>
 	Ahora qued&oacute; predeterminado el "foco" en el casillero donde se ingresa los nuevos sin&oacute;nimos: Sin&oacute;nimo B [Enter] Sin&oacute;nimo C [Enter] etc <br>
 	2. En la cabezera qued&oacute; integrado un link al diccionario de la RAE para las dudas en algunos t&eacute;rminos. (est&aacute; vinculado e integrado al portal)<br>
	Volvimos a estar al servicio. Gracias a toda la comunidad.
	</td>
</tr>
<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-11-06</span></td>
	<td valign="top">
	Se ha incluido una nueva opci&oacute;n para el ingreso y edici&oacute;n de los sin&oacute;nimos. Junto a la opci&oacute;n 'figurado' (palabras en sentido figurado) aparece ahora la opci&oacute;n 'NoRAE': Esto significa que ahora, luego de una encuesta, se puede advertir de que tal palabra no est&aacute; en el diccionario de la Real Academia. Esto ayuda a: <br>
	* evitar borrar las palabras que ya est&aacute;n ingresadas<br>
	* evitar borrar la que se agregar&aacute;n en el futuro<br>
	* que el usuario final pueda elegir de utilizarlas o no.<br>
	</td>
</tr>

<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2005-01-17 TOP 10</span></td>
	<td valign="top">
	01 12743 falcaraz@<br>
	02 .6298 pealfa@<br>
	03 .5244 ja.barcelona@<br>
	04 .1819 admin<br>
	05 .1351 ggabriel@<br>
	06 .1140 trucas@<br>
	07 .1091 abregoservicios@<br>
	08 ..819 jorgemarsa@<br>
	09 ..615 rvalencia@<br>
	10 ..457 arego@<br>
	</td>
</tr>

<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-03-30 TOP 10</span></td>
	<td valign="top">
	2870 ja.barcelona@..le.es<br>
	2648 pealfa@..hoo.es<br>
	1680 falcaraz@..o.com<br>
	1351 ggabriel@..ternet.com.uy<br>
	1045 abregoservicios@..odigy.net.mx<br>
	650 admin<br>
	457 arego@..enoffice.org<br>
	325 trucas@..percable.es<br>
	280 juanrey@..icia.es<br>
	245 rvalencia@..stmail.fm<br>
	--- Otros usuarios: 451<br>
	--- Actividad total: 12.002<br>
	</td>
</tr>

<tr>
	<td valign="top" align="right" width="90"><span class="newsdate">2004-05-22</span></td>
	<td valign="top"> Se ha incluido para descargar (mas abajo) el archivo comprimido para tener habilitado la SEPARACION SILABICA en OpenOffice.org, con licencia LGPL, creada desde CERO por Marcelo Garrone con la ayuda de la lista de usuarios openoffice-es-diccionario. El anterior ten�a muchos errores.
	</td>
</tr>
</table>

<?php 
include("include/bottom.php"); 
page_close();
?>
