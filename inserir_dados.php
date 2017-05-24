
<?PHP
include('config.php');
if(isset($_POST['campo3'])){
      
                  $palavra_nova = $_POST['campo1'];
                  $temas = $_POST['campo2'];
                  $testar_palavra = mysql_query("SELECT * FROM `palavras`  WHERE `palavra` = '$palavra_nova' AND `tema` = '$temas'");
                  if(mysql_num_rows($testar_palavra) == 1){
                        echo "Palavra: $palavra_nova já cadastrada no tema: $temas .";
                    }else{
                    $sql3 = mysql_query("INSERT INTO `palavras` (`palavra`, `tema`) VALUES ('$palavra_nova', '$temas')");
                    if($sql3){
                    echo "Palavra: $palavra_nova enviada com sucesso Tema: $temas";
                    }else{
                    echo "Erro ao enviar a palavra $palavra_nova";
                    }
    }
}
    if(isset($_POST['campo4'])){ 
                    $temas2 = $_POST['campo1'];
                    $testar_tema = mysql_query("SELECT * FROM `temas`  WHERE `tema` = '$temas2'");
                    if(mysql_num_rows($testar_tema) == 1){
                          echo "Tema: $temas2  já cadastrado.";
                    }else{
                      $sql4 = mysql_query("INSERT INTO `temas` (`tema`) VALUES ('$temas2')");
                      if($sql4){
                      echo "Tema: $temas2  enviado com sucesso.";
                      }else{
                      echo "Erro ao enviar o tema $temas2";
        }
    }
}
?>