<?php 

// phpinfo();



try{
  
  $db="toto";
  $host = "mysql:host=mysql;dbname=$db;charset=utf8mb4" ;
  $connexion = new PDO( $host , "root","root");
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

  $req = $connexion->prepare("SELECT * FROM articles");

  $result = $req->execute();

  var_dump( $req->fetchAll( ));

}catch (PDOException $e){
  $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
  die($msg);
}