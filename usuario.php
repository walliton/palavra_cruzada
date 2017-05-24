<?PHP
setlocale(LC_CTYPE,'pt_BR');
    if(isset($_COOKIE["logado"])){
        $user = $_COOKIE["logado"];
        echo '<script>var user_logado = "'. $user.'";</script>';
    }else{
$user = null;        
    }
     if(isset($_COOKIE["admin"])){ 
         $admin = ($_COOKIE["admin"]);
}else{
     $admin = null;    
     }

?>

                        <?PHP if(!$user== null){?>
                        <font color="#FF0000" size="3" face="Arial Black"> Bem-vindo: </font>
                            <?PHP echo $user; } ?>
                        <?PHP if(!$admin== null){?>
                        <font color="#FF0000" size="3" face="Arial Black"> Admin: </font>
                            <?PHP echo $admin; } ?>     