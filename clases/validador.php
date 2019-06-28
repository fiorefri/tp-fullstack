<?php

class Validador {

  public static function validarRegistro($datos){
    // var_dump($datos);
    // var_dump($_FILES);
      global $dbAll;

      $errores=[];
      $datosFinales = [];

      foreach ($datos as $posicion => $valores) {

        if(!is_array($datos[$posicion])){
          $datosFinales[$posicion] = trim($valores);
        }
        // if($posicion !== "hobbies"){
        //   $datosFinales[$posicion] = trim($valores);
        // }
      } // ver en que caso rompe.... Rta: cuando el dato es un array.

      //var_dump($errores, $datosFinales);

      if($_FILES["imagen"]["error"] !== 0){
        $errores["imagen"]="Hubo un error. Por favor, vuelva a subir la imagen";
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
      } if(/*file_exists("db.json") && */
        $dbAll->existeUsuario($datosFinales["email"])){ //TODO agergar validación de usaurio existente.
        $errores["email"] = "El email ya se encuentra registrado.";
      }

      if(strlen($datosFinales["pass"]) == 0){
        $errores["pass"] = "El campo contraseña no puede estar vacío.";
      } if(strlen($datosFinales["pass2"]) == 0){
        $errores["pass"] = "Por favor repita su contraseña.";
      } elseif($datosFinales["pass"] !== $datosFinales["pass2"]){
        $errores["pass"] = "Las contraseñas no coinciden.";
      }

      return $errores;
  }

  public static function validarLogin($datos){
    global $dbAll;

    $errores = [];
    if(strlen($datos["email"]) == 0){
      $errores["email"] = "Por favor complete el campo email.";
    } elseif (!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)) {
      $errores["email"] = "Por favor ingrese un email con formato válido.";
    } if(!$dbAll->existeUsuario($datos["email"])){ //TODO agergar validación de usaurio existente.
      $errores["email"] = "El email no se encuentra registrado.";
    }

    if(strlen($datos["pass"]) == 0){
      $errores["pass"] = "El campo contraseña no puede estar vacío.";
    } else {
      $usuario = $dbAll->buscarUsuarioPorMail($datos["email"]);
       // var_dump($usuario, $datos["email"]);
      if(!password_verify($datos["pass"], $usuario->getPass())){
        $errores["pass"] = "La contraseña es incorrecta.";
      }
    }

    return $errores;

  }


}
