<?PHP 
include('config.php');
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_CTYPE,'pt_BR');

$login = addslashes($_POST['campo1']);
$senha = $_POST['campo2'];

$testar = mysql_query("SELECT * FROM `login`  WHERE `usuario` = '$login'");
    if(mysql_num_rows($testar) == 1){
        echo "Usuário já cadastrado";
    }else{
            $sql3 = mysql_query("INSERT INTO `login` (`usuario`, `user_pass`) VALUES ('$login', '$senha')");
        if($sql3){
            echo "Cadastro realizado com sucesso";
                        setcookie("logado", $login, time()+360000);	
                            }else{

                        echo "Não possível cadastrar";
                }
    }
?>