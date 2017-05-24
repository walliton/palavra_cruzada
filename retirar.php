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
    <meta charset="utf-8">
    <meta name="author" content="Walliton">
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" >
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
							Tema
						</th>
						<th>
							Palavra
						</th>
						<th>
							Delete
						</th>
					</tr>
				</thead>
                 <?PHP
                      $Query = mysql_query("SELECT * FROM `palavras` ORDER By tema");
                      for($i=0;$i<mysql_num_rows($Query);$i++) {
                      $Array = mysql_fetch_row($Query);
                      ?>
				<tbody>
					<tr>

						<td>
							<?PHP echo @$Array[0];?>
						</td>
						<td>
							<?PHP echo @$Array[1];?>
						</td>
						<td>
                            <div id="<?php echo $i;?>">
                            <input type="hidden" name="palavra_retirar" id="palavra_retirar<?php echo $i;?>" value="<?php echo @$Array[0];?>" />
                            <input type="hidden" name="tema_palavra" id="tema_palavra<?php echo $i;?>" value="<?php echo @$Array[1];?>" />
                            <button  id="retirar1" name="<?php echo $i;?>" class="btn btn-danger btn-xs  btn-lg btn-block">Deletar</button>
                            </div>
						</td>
					</tr>
				</tbody>
				 <?PHP  } ?>
			</table>
		</div>
		
		<div class="col-md-6">
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr class="danger">
						<th>
							Tema
						</th>
						<th>
							Delete
						</th>

					</tr>
				</thead>
                    <?PHP
                      $Query2 = mysql_query("SELECT * FROM `temas` ORDER By tema");
                      for($y=0;$y<mysql_num_rows($Query2);$y++) {
                      $Array2 = mysql_fetch_row($Query2);
                      ?>
				<tbody>
					<tr>
						<td>
                            
							  <?PHP echo @$Array2[1];?>
						</td>
						<td>
							  <div id="retirar_conteudo">
                              <input type="hidden" name="tema_retirar" id="tema_retirar<?php echo $y;?>" value="<?php echo @$Array2[1];?>" />
                              <button  id="retirar2" name="<?php echo $y;?>" class="btn btn-danger btn-xs btn-lg btn-block">Deletar</button>
                            </div>
						</td>
					</tr>
				</tbody>
				 <?PHP  } ?>
			</table>
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