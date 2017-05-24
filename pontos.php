<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');

if(isset($_COOKIE["logado"])){
        $user_rank = $_COOKIE["logado"];
}
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
		<div class="col-md-12">
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr class="danger">

						<th>
							Nível
						</th>
						<th>
							Tempo
						</th>
						
					</tr>
				</thead>
                 <?PHP
                      $Query = mysql_query("SELECT * FROM `rank` WHERE `usuario` = '$user_rank' ORDER By nivel, tempo ASC");
                      $verificacao = mysql_num_rows($Query);
                      if($verificacao ==0){
                      	echo "Você Não possui pontos";
                     			 }else{
                      for($i=0;$i<mysql_num_rows($Query);$i++) {
                      $Array = mysql_fetch_row($Query);
                      ?>
					<tbody>
					<tr>

						<td>
							<?PHP echo @$Array[2];?>
						</td>
						<td>
							<?PHP echo @$Array[1];?>
						</td>
				
					</tr>
				</tbody>
				 <?PHP  }?>
				  <?PHP  }?>
			</table>
		  </div>
        </div>
     </div>
    </body>
     <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</html>