<?php

/**
 * Conexión mySql
 */
class DbMysql extends Db
{
  public $connection;

  function __construct()
  {
    //Gestionar la conexión a DB
    $dsn = "mysql:host=localhost;dbname=proy;port=3306";
    //$dsn = "mysql:host=127.0.0.1;dbname=movies_db;port=3306";
    $user = "root";
    $pass = "1975Judith";

    //$db = new PDO($dsn, $user, $pass);

    try {
      $this->connection = new PDO($dsn, $user, $pass);
      //le dice a la db que muestre los errores en PHP.
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      //echo "todo bien.";
    } catch (\Exception $e) {
      echo "Hubo un error. <br>";
      echo $e->getMessage();
      exit;
    }
  }

  public function guardarUsuario(Usuario $usuario)
  {
    $stmt = $this->connection->prepare("INSERT INTO usuarios VALUES(default, :nombre, :email, :pass, :imagen)");

    $stmt->bindValue(":nombre",$usuario->getNombre());
    $stmt->bindValue(":email",$usuario->getEmail());
    $stmt->bindValue(":pass",$usuario->getPass());
    $stmt->bindValue(":imagen",$usuario->getImagen());

    $stmt->execute();
  }

  public function buscarUsuarioPorMail($email)
  {
    $stmt = $this->connection->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindValue(":email",$email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario){
      // return $usuario;
      $usuario = new Usuario($usuario);
      return $usuario;
    }

    return null;
  }

  public function existeUsuario($email)
  {
    return $this->buscarUsuarioPorMail($email) !== null;
  }

  public function traerUsuarioLogueado()
  {
    // Si está logueado trae los datos del usuario
    if(isset($_SESSION["email"])) {
      $usuario = $this->buscarUsuarioPorMail($_SESSION["email"]);
      return $usuario;
    } else {
      // Sino: FALSE
      return false;
    }
  }

}
