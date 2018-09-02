<?php 
session_start();
require 'config.php';

require 'classes/respostas.class.php';
require 'classes/contatos.class.php';
$r = new Respostas();
$c = new Contatos();

if (isset($_POST['lista']) && !empty($_POST['lista'])){
    $lista = addslashes($_POST['lista']);
}

if (isset($_GET['id']) && !empty($_GET['id'])){
    $info = $r->getResposta($_GET['id']);
} else {
    ?>
    <script type="text/javascript">window.location.href="minhas-respostas.php";</script>
    <?php 
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	</head>
	<body>
		<?php 
		  //Definindo o nome do arquivo que será exportado
		  $arquivo = 'google.xls';
		  
		  //Criando uma tabela HTML com o formato da planilha para exportar contatos
		  $html = '';
		  $html .= '<table border="0">';
		  $html .= '<tr>';
		  $html .= '<td>Name</td>';
		  $html .= '<td>Given Name</td>';
		  $html .= '<td>Additional Name</td>';
		  $html .= '<td>Family Name</td>';
		  $html .= '<td>Yomi Name</td>';
		  $html .= '<td>Given Name Yomi</td>';
		  $html .= '<td>Additional Name Yomi</td>';
		  $html .= '<td>Family Name Yomi</td>';
		  $html .= '<td>Name Prefix</td>';
		  $html .= '<td>Name Suffix</td>';
		  $html .= '<td>Initials</td>';
		  $html .= '<td>Nickname</td>';
		  $html .= '<td>Short Name</td>';
		  $html .= '<td>Maiden Name</td>';
		  $html .= '<td>Birthday</td>';
		  $html .= '<td>Gender</td>';
		  $html .= '<td>Location</td>';
		  $html .= '<td>Billing Information</td>';
		  $html .= '<td>Directory Server</td>';
		  $html .= '<td>Mileage</td>';
		  $html .= '<td>Occupation</td>';
		  $html .= '<td>Hobby</td>';
		  $html .= '<td>Sensitivity</td>';
		  $html .= '<td>Priority</td>';
		  $html .= '<td>Subject</td>';
		  $html .= '<td>Notes</td>';
		  $html .= '<td>Group Membership</td>';
		  $html .= '<td>Phone 1 - Type</td>';
		  $html .= '<td>Phone 1 - Value</td>';
		  $html .= '</tr>';
		  
	 	  $contatos = $c->getContatos($info['lista_contatos_id']);
		  foreach ($contatos as $contato){
		      $html .= '<tr>';
		      $html .= '<td>'.$contato['nome'].'</td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td></td>';
		      $html .= '<td>* My Contacts</td>';
		      $html .= '<td>Mobile</td>';
		      if ($contato['ddd'] == '0'){
		          $contato['ddd'] = '';
		      } else {
		          $contato['celular'] = $contato['ddd'].$contato['celular'];
		      }
		      $html .= '<td>'.$contato['celular'].'</td>';
		      $html .= '</tr>';
		  } 
		  
		  // Configurações header para forçar o download
		  header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		  header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		  header ("Cache-Control: no-cache, must-revalidate");
		  header ("Pragma: no-cache");
		  header ("Content-type: application/x-msexcel");
		  header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		  header ("Content-Description: PHP Generated Data" );
		  // Envia o conteúdo do arquivo
		  echo $html;
		  exit; ?>
	</body>
</html>
