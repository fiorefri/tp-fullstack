<?php
session_start();
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
      } elseif(ctype_alpha($datosFinales["nombre"]) == false){
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

      return $errores;
  }
 ?>
