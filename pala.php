<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');
?>
<?php

    if(isset($_POST['escolha'])){
        $tema_escolha = $_POST['temas'];
        $level = $_POST['optlevel'];
         if($tema_escolha=="Geral"){
            $sql = mysql_query("select palavra from palavras ORDER BY RAND() LIMIT $level");
        }else{
        $sql = mysql_query("select palavra from palavras WHERE tema = '$tema_escolha' ORDER BY RAND() LIMIT $level");
        }
            }else{
                $level = 15;
                $sql = mysql_query("select palavra from palavras ORDER BY RAND() LIMIT $level");
                $tema_escolha = "Geral";
                }
                $array = array();
                while($linha = mysql_fetch_array($sql)){
                   $array[] = $linha["palavra"];


                $stringa = implode("','", $array);
                }
  ?> 

<!DOCTYPE html>
<html lang="pt-br">
      <head>
        <meta charset="utf8">
        <meta name="author" content="Walliton" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="css/style.css" rel="stylesheet">
		<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<script type="text/javascript" src="jquery/jquery.puzzle.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">	
					jQuery(function($){
						$('#canvas').puzzle({
							words: ['<?php echo $stringa;?>']
							, cols: <?php echo $level;?>
							, rows: 15
						});
					});
        </script>
             
	</head>
	
	<body >
    <div class="row" id="todo" >
         <div class="row">
                         <div class="col-md-2"></div>
                        <div class="col-md-8 col-xs-12">
                        <form class="form-inline" name="escolha"id="escolha" method="post" action="">
                        <div class="form-group">
                          <label for="Selecione o Tema">Tema</label> 
                                <select id="temas" name="temas" class="form-control" required="">
                                    <option value=""></option>
										<?php
												$sql = "SELECT DISTINCT tema
														FROM temas
														ORDER BY tema";
												$res = mysql_query( $sql );
												while ( $row = mysql_fetch_assoc( $res ) ) {
                                                    if($row['tema']== $tema_escolha){
                                                        echo '<option selected="selected" value="'.$row['tema'].'" >'.$row['tema'].'</option>';
                                                    }else{
													echo '<option value="'.$row['tema'].'" >'.$row['tema'].'</option>';
                                                    }
												}
										?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="radio"><input type="radio" name="optlevel" value="10"
                                                            <?php echo ($level == '10' ? 'checked' : '') ?>>Fácil</label>
                                <label class="radio"><input type="radio" name="optlevel" value="15" 
                                                            <?php echo ($level == '15' ? 'checked' : '') ?>>Médio</label>
                                <label class="radio"><input type="radio" name="optlevel" value="20" 
                                                            <?php echo ($level == '20' ? 'checked' : '') ?>>Díficil</label>
                            </div>
                            <div class="form-group">
                              <label for="singlebutton"></label>
                                <button id="escolha" name="escolha" class="btn btn-primary btn-xs" >Escolher</button>
  
                            </div>
                        </form>
                        </div>
                    
                    <div class="col-md-2 col-xs-12">
                        <font color="#FF0000" size="3" face="Arial Black"><span id="clock1" ><script>setTimeout('getSecs()',1000);</script></span></font>
                    </div>
                   
                
        <br/><br/><br/>
        <div class="col-xs-12 col-md-9" id="direira">

                <div id="canvas" class="canvas">

                    <div class="letra">A</div>
                    <div class="letra">B</div>
                    <div class="letra">C</div>
                    <div class="letra">D</div>
                    <div class="letra">E</div>
                    <div class="letra">F</div>
                    <div class="letra">G</div>
                    <div class="letra">H</div>
                    <div class="letra">I</div>
                    <div class="letra">J</div>
                    <div class="letra">K</div>
                    <div class="letra">L</div>
                    <div class="letra">M</div>
                    <div class="letra">N</div>
                    <div class="letra">O</div>
                    <div class="letra">P</div>
                    <div class="letra">Q</div>
                    <div class="letra">R</div>
                    <div class="letra">S</div>
                    <div class="letra">T</div>
                    <div class="letra">U</div>
                    <div class="letra">V</div>
                    <div class="letra">X</div>
                    <div class="letra">Y</div>
                    <div class="letra">Z</div>
                    <div class="letra">Ç</div>
                    <div class="letra">Ã</div>
                    <div class="letra">Õ</div>
                    <div class="letra">Á</div>
                    <div class="letra">É</div>
                    <div class="letra">Í</div>
                    <div class="letra">Ó</div>
                    <div class="letra">Ú</div>
                    <div class="letra">Â</div>
                    <div class="letra">Ê</div>

                </div>
            </div>
             
            <div class="col-xs-12 col-md-3" id="esquerda">
                <table class="table table-bordered table-hover table-condensed">
                    <thead>
                          <tr class="warging">
                            <th>
                                <font color="#0000FF" size="2"face="Arial Black"><span> Tema: </span></font>
                                <?php echo $tema_escolha;?>
                                <font color="#0000FF" size="2" face="Arial Black">
                                <span> Nível: </span></font>
                                    <?php 
                                    switch ($level) {
                                        case 10:
                                            echo "Fácil";
                                            echo '<script>var nivel_logado = "Fácil";</script>';
                                            break;
                                        case 15:
                                            echo "Médio";
                                             echo '<script>var nivel_logado = "Médio";</script>';
                                            break;
                                        case 20:
                                            echo "Díficil";
                                             echo '<script>var nivel_logado = "Díficil";</script>';
                                            break;
                                    }
                                ?>
                                
                            </th>
                        </tr>
                        <tr class="danger">
                            <th>
                                Palavras
                            </th>
                        </tr>
                    </thead>
                    <tbody id="names-list">
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </body>
</html>