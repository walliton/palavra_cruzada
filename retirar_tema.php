  
<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');

$temas = $_POST['campo1'];
                    $del2 = mysql_query("DELETE FROM temas WHERE tema = '$temas '");
                    $del3 = mysql_query("DELETE FROM palavras WHERE tema = '$temas '");

                if($del2){
                    echo "Tema $temas  deletado com sucesso.";
                }else{
                    echo "Erro ao deletar o tema $temas .";
                    }
                
            
   ?>