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
    $duplicados = 0;
    $novos = 0;
    
    foreach ($linhas as $linha){
        if($primeira_linha == FALSE){
            
 //           $status = 13;
            $nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
//            $cpf = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
//            $endereco = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
//            $email = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
            $ddd = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
            $celular = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
            $id_grupo = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
//            $residencia = $linha->getElementsByTagName("Data")->item(10)->nodeValue;
//            $bairro = $linha->getElementsByTagName("Data")->item(11)->nodeValue;
//            $numero = $linha->getElementsByTagName("Data")->item(12)->nodeValue;
//            $complemento = $linha->getElementsByTagName("Data")->item(13)->nodeValue;
//            $cidade = $linha->getElementsByTagName("Data")->item(14)->nodeValue;
//            $estado = $linha->getElementsByTagName("Data")->item(15)->nodeValue;
//            $cep = $linha->getElementsByTagName("Data")->item(16)->nodeValue;
            
//            $celular = "123456789";
/*             echo "nome: ".$nome.", cpf: ".$cpf.", endereco: ".$endereco.", email: ".$email.", ddd: ".$ddd.", celular: ".
                  $celular.", residencia: ".$residencia.", bairro: ".$bairro.", nr: ".$numero.", complemento: ".
                  $complemento.", cidade: ".$cidade.", estado: ".$estado.", cep: ".$cep."status:".$status."<br/>";
 */            
            //Consulta o banco
            $existe = array();
            $existe[] = $c->verificaContato($nome, $celular);
            $id = $existe[0]['id'];
//            echo "id antes do if: ".$id."<br/>";
            
            if (!empty($id) && !is_null($nome)){
               
               //Atualiza no banco
               $c->atualiza($nome, $ddd, $celular, $id_grupo, $id);
 //                          $cpf, $endereco, $email, $ddd, $celular, $residencia, $bairro, $numero, 
 //                           $complemento, $cidade,$estado, $cep, $id);
               
               $duplicados += 1;
               
            } else {
//                 echo "não existe!<BR>";
                //Inserir no banco de dados:
                 if(!empty($nome) && !is_null($nome)){
                 $novos +=1;
                 $c->addContato($nome, $ddd, $celular, $id_grupo);
//                               $cpf, $endereco, $email, $ddd, $celular, $residencia, $bairro, $numero,
//                               $complemento, $cidade,$estado, $cep);
                               
                 }
            } 
            
            if (empty($nome) && is_null($nome)){
                $primeira_linha = false;
                break;
            }
            
        }
        
        $primeira_linha = false;
    }
    
    $msg='<h4 class="alert-heading">Sucesso!</h4>
           <p> Duplicados: '.$duplicados.'</p>'.
           '<p> Novos: '.$novos.'</p>';
    echo $msg;
    
}
?>