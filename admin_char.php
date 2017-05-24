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
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Retirar</title>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr class="danger">

						<th>
							Usuário
						</th>

						<th>
							Nível
						</th>
						<th>
							Tempo
						</th>
						<th>
							Delete
						</th>
					</tr>
				</thead>
                 <?PHP
                      $Query = mysql_query("SELECT * FROM `rank` ORDER By nivel");
                      for($i=0;$i<mysql_num_rows($Query);$i++) {
                      $Array = mysql_fetch_row($Query);
                      ?>
				<tbody>
					<tr>
						<td>
							<?PHP echo @$Array[0];?>
						</td>
						<td>
							<?PHP echo @$Array[2];?>
						</td>
						<td>
							<?PHP echo @$Array[1];?>
						</td>
						<td>
                            <div id="<?php echo $i?>">
                            <input type="hidden" name="char" id="char<?php echo $i?>" value="<?php echo $Array[0]?>" />
                            <input type="hidden" name="nivel" id="nivel<?php echo $i?>" value="<?php echo $Array[2]?>" />
                            <input type="hidden" name="tempo" id="tempo<?php echo $i?>" value="<?php echo $Array[1]?>" />
                            <button  id="retirar_char" name="<?php echo $i?>" class="btn btn-danger btn-xs  btn-lg btn-block">Deletar</button>
                      	    </div>
						</td>
					</tr>
				</tbody>
				 <?PHP  } ?>
			</table>
		</div>
		<div class="col-md-3 col-xs-12">
				  <div>
			   		<input type="hidden" name="arquivo" id="arquivo" value="15" />
               	 	<button  id="retirar_tudo" name="retirar_char" class="btn btn-danger btn-xs  btn-lg btn-block">Deletar tudo</button>
                    </div>
		</div>
		
	</div>
</div>

      <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> 
  </body>
      <?PHP }else{ ?>
    <script>alert('Você precisa estar logado para acessar essa pagina');</script>
    <?PHP } ?>
</html>