<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
$login_db = addslashes($_POST['campo1']);
$senha_db = $_POST['campo2'];

		
        $verificarlogin = mysql_query("SELECT * FROM login WHERE usuario = '$login_db' AND user_pass = '$senha_db'");
        $verificacao = mysql_num_rows($verificarlogin);
        $linha = mysql_fetch_array($verificarlogin);
        $testeadmin = $linha['admin'];
		if(@$verificacao == 0){
				echo "Login ou Senha incorreta";
					}else{
		 if($testeadmin){
             setcookie("admin", $login_db, time()+360000);
             echo "Administrador logado com  Sucesso";
         }else{
			setcookie("logado", $login_db, time()+360000);
		
			echo "Usuário logado com  Sucesso";
         
		  }
        }
	
?>