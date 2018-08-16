<?php  require 'pages/header.php'; ?>
<?php 
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="login.php";</script>
    <?php 
    exit;
}
    //$dados = $_FILES['arquivo'];
   // var_dump($dados);
   
require 'classes/contatos.class.php';
$c = new Contatos();
   
if (!empty($_FILES['arquivo']['tmp_name'])){
    $arquivo = new DomDocument();
    
    $arquivo->load($_FILES['arquivo']['tmp_name']);
    //var_dump($arquivo);
    
    $linhas = $arquivo->getElementsByTagName("Row");
    //var_dump($linhas);
    $primeira_linha = true;
    
    foreach ($linhas as $linha){
        if($primeira_linha == FALSE){
            
            $grupo = 9;
            $email = 'TESTE';
            $status = 13;
            
            
            $nome = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
            echo "Nome: $nome <br/>";
            
            $cpf = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
            echo "CPF: $cpf <br/>";
            
            $endereco = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
            echo "Endereco: $endereco <br/>";
            
            $ddd = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
            echo "ddd: $ddd <br/>";
            
            $celular = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
            echo "Celular: $celular <br/>";
            
            $residencia = $linha->getElementsByTagName("Data")->item(11)->nodeValue;
            echo "Residencia: $residencia <br/>";
            
            $bairro = $linha->getElementsByTagName("Data")->item(12)->nodeValue;
            echo "Bairro: $bairro <br/>";
            
            $numero = $linha->getElementsByTagName("Data")->item(13)->nodeValue;
            echo "Numero: $numero <br/>";
            
            $complemento = $linha->getElementsByTagName("Data")->item(14)->nodeValue;
            echo "Complemento: $complemento <br/>";
            
            $cidade = $linha->getElementsByTagName("Data")->item(15)->nodeValue;
            echo "Cidade: $cidade <br/>";
            
            $estado = $linha->getElementsByTagName("Data")->item(16)->nodeValue;
            echo "$estado: $estado <br/>";
            
            $cep = $linha->getElementsByTagName("Data")->item(17)->nodeValue;
            echo "Cep: $cep <br/>";
            
            //Inserir no banco de dados:
            $c->addContato($grupo, $nome, $email, $celular,$residencia, $endereco, $status);
            
        }
        
        $primeira_linha = false;
    }
}
?>