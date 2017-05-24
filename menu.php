<?PHP
setlocale(LC_CTYPE,'pt_BR');
    if(isset($_COOKIE["logado"])){
        $user = $_COOKIE["logado"];
    }else{
$user = null;        
    }
     if(isset($_COOKIE["admin"])){ 
         $admin = ($_COOKIE["admin"]);
}else{
     $admin = null;    
     }

?>
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                      <div class="container-fluid">
                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#elementoCollapse1">
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                              <a href="imagem.php" class="navbar-brand">Jogos FGF</a>
                          </div>
                          <div class="collapse navbar-collapse" id="elementoCollapse1">
                               <a href="#" class="btn btn-default navbar-btn" id="paghome">
                                    <span class="glyphicon glyphicon-home"></span><font id="menu">  Home</font>
                                </a>
                              <?PHP if(!$admin == null){ ?>
                              <a href="#" class="btn btn-default navbar-btn" id="paginserir">  
                                    <span class="glyphicon glyphicon-transfer"></span><font id="menu"> Inserir</font>
                                  </a>
                                <a  href="#" class="btn btn-default navbar-btn" id="pagretirar">
                                    <span class="glyphicon glyphicon-transfer"></span><font id="menu"> Retirar</font>
                                </a>
                                <a  href="#" class="btn btn-default navbar-btn" id="pagadmin">
                                    <span class="glyphicon glyphicon-transfer"></span><font id="menu"> Admin rank</font>
                                </a>
                              <?PHP } if($admin == null){ 
                                        if (!$user == null){ 
                                    ?> 
                                <a  href="#" class="btn btn-default navbar-btn" id="pagseuspontos">
                                    <span class="glyphicon glyphicon-flag"></span><font id="menu"> Seus Pontos</font>
                                </a>
                              <?PHP } else{ ?>
                                  <a href="#" class="btn btn-default navbar-btn" id="pagcadastro">
                                    <span class="glyphicon glyphicon-share"></span><font id="menu"> Cadastro</font>
                                </a>
                              <?PHP } }?>

                              <?PHP if($admin == null){ ?>
                                <a  href="#" class="btn btn-default navbar-btn"id="pagcomojogar">
                                    <span class="glyphicon glyphicon-fire"></span><font id="menu"> Como jogar</font>
                                </a>
                              <?PHP } if((!$user == null)||(!$admin == null)){ ?>
                                <a  href="#" class="btn btn-default btn-md navbar-btn navbar-right" id="paglogout">
                                <span class="glyphicon glyphicon-log-out"></span><font id="menu"> Logout</font>
                                </a>
                              <?PHP }else{ ?>
                                <a  href="#" class="btn btn-default btn-md navbar-btn navbar-right" id="paglogin">
                                <span class="glyphicon glyphicon-log-in"></span><font id="menu"> Login</font>
                                </a>
                              <?PHP } ?>  
                        </div>    
                      </div>
                    </nav>