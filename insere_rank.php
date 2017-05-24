
<?PHP 
include('config.php');
setlocale(LC_CTYPE,'pt_BR');

$usuario_rank = $_POST['usuario'];
$nivel_rank = $_POST['nivel'];
$tempo_rank = $_POST['tempo'];
if(!empty($usuario_rank)){
$sql3 = mysql_query("INSERT INTO `rank` (`usuario`, `tempo`, `nivel`) VALUES ('$usuario_rank', '$tempo_rank', '$nivel_rank')");
}
?>