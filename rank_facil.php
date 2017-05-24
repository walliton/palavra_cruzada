<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
?>
<?PHP
 $Facil = mysql_query("SELECT * FROM `rank`  WHERE `nivel` = 'Fácil' ORDER BY tempo ASC LIMIT 1");
    for($i=0;$i<mysql_num_rows($Facil);$i++) {
          $rank_facil = mysql_fetch_row($Facil);
    }
    $verificacao = mysql_num_rows($Facil);
	if($verificacao != 0){
    echo "<font color='#0000FF' size='3' face='Arial Black'>Nível Fácil: </font><font color='#FF0000' size='2' face='Arial Black'> $rank_facil[0]/ $rank_facil[1] </font>"; 
	}else {
	echo "<font color='#0000FF' size='3' face='Arial Black'>Nível Fácil: </font><font color='#FF0000' size='2' face='Arial Black'> Não existe Rank</font>";
    }
?>

