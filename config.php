<?PHP 
$conexao = mysql_connect ("localhost" , "walliton", "wa9801") 
     or die ("Conexão falhou!");
mysql_select_db ("caca_palavras") 
     or die ("base de dados não existe");

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
     ?>