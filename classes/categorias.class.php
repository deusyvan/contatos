<?php
class Categorias {
    
    public function getLista(){
        $array = array();
        global $pdo;
        
        $sql = $pdo->query("SELECT * FROM categorias ORDER BY nome_categoria ASC");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}
?>
