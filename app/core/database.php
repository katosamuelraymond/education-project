<?php

class Database{

    private function connect(){

        $db = DBDRIVER.":hostname=".DBHOST.";dbname=".DBNAME;
        return  new PDO($db,DBUSER,DBPASS);

        
    }

    public function query(){ 
       $conn = $this->connect();
       show($conn);
    }
    
} 