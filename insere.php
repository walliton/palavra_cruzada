<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
    if(isset($_COOKIE["admin"])){ 
        $testeadmin = ($_COOKIE["admin"]);
    }else{
       $testeadmin = null; 
    }
if(!$testeadmin == null){ 
?>

<html lang="pt-br">
<head>
    <title>Inserir</title>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
<div id="formulario">
    <fieldset>
        <legend style="text-align: center;">Palavra</legend>
    <div class="row">
        <label class="col-md-4" style="text-align: right;" for="textinput">Palavra:</label>  
        <div class="col-md-4 col-xs-12">
        <input id="nova_palavra" name="novapalavra" type="text" placeholder="Insira a palavra" class="form-control input-md"> 
      </div>
    </div>
        
    <div class="row">
      <label class="col-md-4" for="Selecione o Tema" style="text-align: right;">Selecione o Tema:</label>
       <div class="col-md-4 col-xs-12">
        <select id="enviar_temas" name="enviar_temas" class="form-control">
          <option value=""></option>
                                            <?php
                                                    $sql = "SELECT DISTINCT tema
                                                            FROM temas
                                                            ORDER BY tema";
                                                    $res = mysql_query( $sql );
                                                    while ( $row = mysql_fetch_assoc( $res ) ) {
                                                        echo '<option value="'.$row['tema'].'">'.$row['tema'].'</option>';
                                                    }
                                            ?>
        </select>
        </div>
    </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-5"></div>
          <div class="col-md-7 col-cs-12">
            <button id="btn-palavra" type="submit" name="btn-palavra" class="btn btn-primary">Enviar</button>
          </div>
        </div>
    </fieldset>
</div>
<div id="formulario">
    <fieldset>
    <legend style="text-align: center;">Tema</legend>
        <div class="row">
          <label class="col-md-4 control-label" style="text-align: right;" for="textinput">Tema:</label>  
            <div class="col-md-4 col-xs-12">
            <input id="novo_tema" name="novo_tema" type="text" placeholder="Insira o tema" class="form-control input-md">   
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="btn-tema" type="submit" name="btn-tema" class="btn btn-primary">Enviar</button>
          </div>
        </div>
    </fieldset>
</div>
      
    </body>
    <?PHP }else{ ?>
    <script>alert('Você precisa estar logado para acessar essa pagina');</script>
    <?PHP } ?>
</html>