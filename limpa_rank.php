<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
$char = $_POST['campo10'];

        $del2 = mysql_query("DELETE FROM rank");
	
		if($del2){
            echo "Ranking limpo  com sucesso.";
		}else{
			echo "Erro ao limpar o  Ranking .";
	        }
	    
?>	
