<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
  

                    $palavra = $_POST['campo1'];
                    $tema = $_POST['campo2'];
                    $del = mysql_query("DELETE FROM palavras WHERE palavra = '$palavra' AND tema = '$tema'");

                    if($del){
                        echo "Palavra $palavra do tema $tema Deletado com sucesso";
                    }else{
                        echo "Erro ao deletar a palavra $palavra do tema $tema";
                    }
                   
    
?>