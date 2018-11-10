<?php 

class Mysql{
  private $_conexion;

  public function __construct(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "jobbool";
    $this->_conexion = mysqli_connect(
      $host,
      $user,
      $pass,
      $bd);
  }
  public function query($sql){
    $result = mysqli_query($this->_conexion, $sql);
    return $result;
  }
  public function lastInsertId()
    {
        $result = mysqli_insert_id($this->_conexion);
        return $result;
    }
}
?>