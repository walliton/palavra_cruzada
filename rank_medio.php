<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
?>
<?PHP 
 $Medio = mysql_query("SELECT * FROM `rank`  WHERE `nivel` = 'Médio' ORDER BY tempo ASC LIMIT 1");
    for($i=0;$i<mysql_num_rows($Medio);$i++) {
          $rank_medio = mysql_fetch_row($Medio);
}
	$verificacao = mysql_num_rows($Medio);
	if($verificacao != 0){
         echo "<font color='#0000FF' size='3' face='Arial Black'>Nível Médio: </font><font color='#FF0000' size='2' face='Arial Black'> $rank_medio[0]/ $rank_medio[1] </font>"; 
	}else{
		echo "<font color='#0000FF' size='3' face='Arial Black'>Nível Médio: </font><font color='#FF0000' size='2' face='Arial Black'> Não existe Rank</font>";
	}
    
?>