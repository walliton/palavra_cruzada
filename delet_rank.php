<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
$char = $_POST['campo1'];
$nivel = $_POST['campo2'];
$tempo = $_POST['campo3'];
$del = mysql_query("DELETE FROM rank WHERE usuario = '$char' AND tempo = '$tempo' AND nivel = '$nivel'");

		        if($del){
		            echo "Ranking do  $char tempo $tempo e nível $nivel deletado com sucesso.";
		        }else{
		            echo "Erro ao deletar o rank do $char .";
		        }
?>
	