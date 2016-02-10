<?php
     try{

     $bdd = new PDO("mysql:host=localhost;dbname=chat_database","root","");

     }catch(Exception $e){

        die("ERROR: ".$e->getMessage());

     }

?>