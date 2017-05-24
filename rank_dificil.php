<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
?>
<?PHP
 $Dificil = mysql_query("SELECT * FROM `rank`  WHERE `nivel` = 'Díficil' ORDER BY tempo ASC LIMIT 1");
    for($i=0;$i<mysql_num_rows($Dificil);$i++) {
          $rank_dificil = mysql_fetch_row($Dificil);
}
	 $verificacao = mysql_num_rows($Dificil);
		if($verificacao != 0){
         echo "<font color='#0000FF' size='3' face='Arial Black'>Nível Díficil: </font><font color='#FF0000' size='2' face='Arial Black'> $rank_dificil[0]/ $rank_dificil[1] </font>"; 
	           }else{
		echo "<font color='#0000FF' size='3' face='Arial Black'>Nível Díficil: </font><font color='#FF0000' size='2' face='Arial Black'> Não existe Rank</font>";
	
	}
?>