<?php
    try {
        class DB {
            private $db = null;
    
            public function __construct()
            {
                try{
                    $this->db = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");
                }catch(Exception $e){
        
                }
            }
    
            public function sqlexec($sql,$arr) {
                $s = $this->db->prepare($sql);
                $s->execute($arr != null ? $arr:null);
    
                return $s;
            }
    
            public function getAll($table) {
                $s = $this->db->prepare("SELECT * FROM $table");
                $s->execute();
    
                return $s->fetchAll();
            }
    
            public function getOne($table,$filter,$arr ) {
                $s = $this->db->prepare("SELECT * FROM $table where $filter");
                $s->execute($arr);
    
                return $s->fetch();
            }  
            
            public function getFilter($table,$filter,$arr ) {
                $s = $this->db->prepare("SELECT * FROM $table where $filter");
                $s->execute($arr);
    
                return $s->fetchAll();
            }  
    
            public function add($table,$filter,$items = []){
                $s = $this->db->prepare("INSERT INTO $table SET $filter");
                $s->execute($items);
                return $s;
            }
    
        
        }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
?>