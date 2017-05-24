
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Caça Palavras</title>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <script src="jquery/jquery.puzzle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/arquivos.js"></script>
    <link href="css/style.css" rel="stylesheet" >
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"> 
    </head>   
    <body style="padding-top:55px;">
            <div class="row">
                <div id="menutop" class="col-xs-12"></div>
            </div>      
        	<div class="row">
                <div id="rank"  class="col-xs-12 col-md-1 borda_rank">Ranking</div>
        		<div id="rank1" class="col-xs-12 col-md-3 borda_rank"></div>   
        		<div id="rank2" class="col-xs-12 col-md-3 borda_rank"></div>
        		<div id="rank3" class="col-xs-12 col-md-3 borda_rank"></div>
                <div class="col-xs-12 col-md-2"></div>
        	</div>
            <div class="container">
                <div class="row">
                    <div id="usuario" class="col-xs-12 col-md-4" ></div>
                    <br/>
                </div>
                <div class="row">
                    <div class="col-xs-12" id="conteudo">
                        <?PHP
                        if(isset($_POST['escolha'])){
                          include("pala.php");
                        }else{
                         include("imagem.php");
                        }
                        ?>
                    </div>
                </div>
            </div>
        
    </body>
</html>