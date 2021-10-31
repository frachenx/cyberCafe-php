<?php
    class database{
      private $server ="localhost";
      private $user = "root";
      private $dbPassword = "";
      private $database = "cyberCafe" ;

      protected function connect(){
        $connection = mysqli_connect($this->server,$this->user,$this->dbPassword,$this->database);
        return $connection;
      }
    }
?>