<?php

    class Crud extends PDO {

        public function __construct($config){
            parent::__construct('mysql:host=' . $config::HOST 
                            . '; dbname=' . $config::DATABASE 
                            . '; port=' . $config::PORT 
                            . '; charset=utf8', $config::USERNAME, '');
        }

        public function select($table, $field='id', $order='ASC' ){
            $sql = "SELECT * FROM $table ORDER BY $field $order";
            $stmt  = $this->query($sql);
            return  $stmt->fetchAll();
        }


        public function selectId($table, $value, $field = 'idClient', $url = 'client-index.php'){
            $sql ="SELECT * FROM $table WHERE $field = :$field";
            $stmt = $this->prepare($sql);
            $stmt->bindValue(":$field", $value);
            $stmt->execute();
            $count = $stmt->rowCount();
            if($count == 1 ){
                return $stmt->fetch();
            }else{
                header("location: $url");
            }
        }
     
//-----------------------------------Client---------------------------------------------//
        public function insert($table, $data){
            $nomChamp = implode(", ",array_keys($data));
            $valeurChamp = ":".implode(", :", array_keys($data));

            $sql = "INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";
            
            $stmt = $this->prepare($sql);
            foreach($data as $key=>$value){
                $stmt->bindValue(":$key", $value);
            } 
            if(!$stmt->execute()){
                print_r($stmt->errorInfo());
            }else{
                return $this->lastInsertId();
            }
        }

        public function update($table, $data, $champId = 'idClient'){
            $champRequete = null;
            foreach($data as $key=>$value){
                $champRequete .= "$key = :$key, ";
            }
            $champRequete = rtrim($champRequete, ", ");
    
            $sql = "UPDATE $table SET $champRequete WHERE $champId = :$champId";
    
            $stmt = $this->prepare($sql);
            foreach($data as $key=>$value){
                $stmt->bindValue(":$key", $value);
            } 
            if(!$stmt->execute()){
                print_r($stmt->errorInfo());
            }else{
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }

        public function delete($table, $id, $champId = 'idClient', $url='client-index.php'){

        $sql = "DELETE FROM $table WHERE $champId = :$champId";

        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$champId", $id);
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }else{
            header('Location: ' . $url);
        }

    }
//-----------------------------------LIVRES---------------------------------------------//

        public function insertLivre($table, $data){
            $nomChamp = implode(", ",array_keys($data));
            $valeurChamp = ":".implode(", :", array_keys($data));

            $sql = "INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";
            
            $stmt = $this->prepare($sql);
            foreach($data as $key=>$value){
                $stmt->bindValue(":$key", $value);
            } 
            if(!$stmt->execute()){
                print_r($stmt->errorInfo());
            }else{
                return $this->lastInsertId();
            }
        }

//-----------------------------------Maison d'edition---------------------------------------------//
        public function insertMaison($table, $data){
            $nomChamp = implode(", ",array_keys($data));
            $valeurChamp = ":".implode(", :", array_keys($data));

            $sql = "INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";
            
            $stmt = $this->prepare($sql);
            foreach($data as $key=>$value){
                $stmt->bindValue(":$key", $value);
            } 
            if(!$stmt->execute()){
                print_r($stmt->errorInfo());
            }else{
                return $this->lastInsertId();
            }
        }

        public function getMaisonsEdition(){
            return $this->select("maison_edition", "idMaison_edition");
        }


//-----------------------------------Auteur---------------------------------------------//
    public function insertAuteur($table, $data){
        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql = "INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";
        
        $stmt = $this->prepare($sql);
        foreach($data as $key=>$value){
            $stmt->bindValue(":$key", $value);
        } 
        if(!$stmt->execute()){
            print_r($stmt->errorInfo());
        }else{
            return $this->lastInsertId();
        }
    }

    public function getAuteurs(){
        return $this->select("auteur", "idAuteur");
    }
}


?>