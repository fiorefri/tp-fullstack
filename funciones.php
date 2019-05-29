<?php
session_start();
// var_dump ($_COOKIE);
include_once "pdo.php";
function validarRegistro($datos){
    $errores=[];
    $datosFinales = [];

    foreach ($datos as $posicion => $valores) {

      if(!is_array($datos[$posicion])){
        $datosFinales[$posicion] = trim($valores);
      }
    }

      if(strlen($datosFinales["nombre"]) == 0){
        $errores["nombre"] = "Por favor complete el campo nombre.";
      } elseif(preg_match('/^[A-Za-z\s]+$/', $datosFinales["nombre"]) == false){
        $errores["nombre"] = "El nombre debe contener solo letras..";
      }
      if(strlen($datosFinales["email"]) == 0){
        $errores["email"] = "Por favor complete el campo email.";
      } elseif (!filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)) {
        $errores["email"] = "Por favor ingrese un email con formato válido.";
       } if(file_exists("db.json") && existeUsuario($datosFinales["email"])){ //TODO agergar validación de usaurio existente.
         $errores["email"] = "El email ya se encuentra registrado.";
      }

      if(strlen($datosFinales["pass"]) == 0){
        $errores["pass"] = "El campo contraseña no puede estar vacío.";
      } if(strlen($datosFinales["pass2"]) == 0){
        $errores["pass"] = "Por favor repita su contraseña.";
      } elseif($datosFinales["pass"] !== $datosFinales["pass2"]){
        $errores["pass"] = "Las contraseñas no coinciden.";
      }

      if($_FILES) {
        if ($_FILES["avatar"]["error"] !== 0){
          $errores["avatar"]="Hubo un error. Por favor, vuelva a subir la imagen";
        }
      }

      if(!isset($datosFinales["tyc"])) {
        $errores["tyc"]="Debe aceptar los terminos y condiciones para continuar.";
      }

      return $errores;
  }

  function nextId(){
    // TODO: que pasa si no hay archivo.
    if(!file_exists("db.json")){
      $json = "";
    } else {
      $json = file_get_contents("db.json");
    }

    // TODO: que pasa si no hay usuario anterior.
    if($json == ""){
        return 1;
    }

    $array = json_decode($json, true);
    $ultimoUsuario = array_pop($array["usuarios"]);
    $lastId = $ultimoUsuario["id"];

    return $lastId + 1;

  }

  function armarUsuario(){
    return [
      //"id" => nextId(),
      "nombre" => trim($_POST["nombre"]),
      "email" => trim($_POST["email"]),
      "pass" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
      "avatar" => "ruta de la imagen o nombre del archivo"

    ];

  }
  function guardarUsuario($usuario){
  //  if(!file_exists("db.json")){
    //  $json = "";
    //} else {
    //  $json = file_get_contents("db.json");
    //}
  //  $json = file_get_contents("db.json");
  //  $array = json_decode($json, true);

    //$array["usuarios"][] = $usuario;
    //$array = json_encode($array, JSON_PRETTY_PRINT);

    //file_put_contents("db.json", $array);

    // INSERT INTO usuarios VALUES();
    global $db;
    $stmt = $db->prepare("INSERT INTO usuarios VALUES(default, :nombre, :email, :pass)");
    $stmt->bindValue(":nombre",$usuario["nombre"]);
    $stmt->bindValue(":email",$usuario["email"]);
    $stmt->bindValue(":pass",$usuario["pass"]);

    $stmt->execute();

  }

  function buscarUsuarioPorMail($email){
    //$json = file_get_contents("db.json");
    //$array = json_decode($json, true);

    //foreach($array["usuarios"] as $usuario){
      //if($usuario["email"] == $email){
      //  return $usuario;
      //}
    //}
    //return null;

    //SELECT * FROM usuarios WHERE $email = usuario.email
    global $db;
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindValue(":email",$email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if($usuario){
      return $usuario;
    }
    return NULL;
  }

  function existeUsuario($email){
    return buscarUsuarioPorMail($email) !== null;
  }

  function validarLogin($datos){
    $errores = [];
    if(strlen($datos["email"]) == 0){
      $errores["email"] = "Por favor complete el campo email.";
    } elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
      $errores["email"] = "Por favor ingrese un email con formato válido.";
    } if(!existeUsuario($datos["email"])){ //TODO agergar validación de usuario existente.
      $errores["email"] = "El email no se encuentra registrado.";
    }

    if(strlen($datos["pass"]) == 0){
      $errores["pass"] = "El campo contraseña no puede estar vacío.";
    } else {
      $usuario = buscarUsuarioPorMail($datos["email"]);
      if(!password_verify($datos["pass"], $usuario["pass"])){
        $errores["pass"] = "La contraseña es incorrecta.";
      }
    }

    return $errores;

  }

  function loguearUsuario($email){
    $_SESSION["email"] = $email;

    if(isset($_POST["recordarme"])){
      $usuario = buscarUsuarioPorMail($email);
      setcookie ("nombre", $usuario["nombre"], time() + 1000);
      setcookie ("email", $_POST["email"], time() + 1000);
    }
  }

  function usuarioLogueado(){
     return isset($_SESSION["email"]);
  }

  function traerUsuarioLogueado(){
    // Si está logueado trae los datos del usuario
    if(isset($_SESSION["email"])) {
      $usuario = buscarUsuarioPorMail($_SESSION["email"]);
      return $usuario;
    } else {
      // Sino: FALSE
      return false;
    }

  }

  function listaUsuarios(){
    // $json = file_get_contents("db.json");
    // $array = json_decode($json, true);
    //
    // return $array["usuarios"];

    global $db;
    $stmt = $db->prepare("SELECT * FROM listaUsuarios");
    $stmt->execute();

    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $usuarios;
  }
 ?>
