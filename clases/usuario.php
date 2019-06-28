<?php

/**
 * Crea un usuario tanto desde el form de registro como desde la db al momento de loguerse.
 */
class Usuario
{
  private $id;
  private $nombre;
  private $email;
  private $pass;
  private $imagen;

  function __construct($array)
  {
    if (isset($array["id"])){
      $this->id = $array["id"];
      $this->pass = $array["pass"];
    } else {
      $this->id = null;
      $this->pass = password_hash($array["pass"], PASSWORD_DEFAULT);
    }
    $this->nombre = trim($array["nombre"]);
    $this->email = trim($array["email"]);
    $this->imagen = trim($array["imagen"]);

  }

  public function setName($nombre)
  {
    $this->nombre = $nombre;
    return $this;
  }
  public function setEmail($email)
  {
    $this->email = $email;
    return $this;
  }
  public function setPass($pass)
  {
    $this->pass = $pass;
    return $this;
  }
  public function setImagen($avatar)
  {
    $this->imagen = $imagen;
    return $this;
  }

public function getNombre()
{
  return $this->nombre;
}
public function getEmail()
{
  return $this->email;
}
public function getPass()
{
  return $this->pass;
}
public function getImagen()
{
  return $this->imagen;
}

// public function listaUsuarios($id){
//   global $dbAll;
//   $stmt = $dbAll->prepare("SELECT * FROM usuarios");
//   $stmt->execute();
//
//   $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
//
//   return $usuarios;
// }

}
