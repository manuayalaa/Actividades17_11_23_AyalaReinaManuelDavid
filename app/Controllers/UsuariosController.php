<?php

namespace App\Controllers;

class UsuariosController extends BaseController
{
    public function usuariosAction()
    {
        $aUsuarios = array(
            array('nombre' => 'Jesús', 'apellido1' => 'Martínez', 'apellido2' => 'García'),
            array('nombre' => 'Mercedes', 'apellido1' => 'Calamaro', 'apellido2' => 'Pedrajas'),
            array('nombre' => 'Elena', 'apellido1' => 'Pérez', 'apellido2' => ''),
        );

        $crearusuarios = function ($array) {
            $usuarios = array();
            foreach ($array as $key => $value) {
                $usuario = "";
                $nombre = $value['nombre'];
                $apellido1 = $value['apellido1'];
                $apellido2 = $value['apellido2'];
                if ($apellido1 != ''){
                    $apellido1format = $apellido1[0] . $apellido1[1];
                }else{
                    $apellido1format = "";
                }
                if ($apellido2 != ''){
                    $apellido2format = $apellido2[0] . $apellido2[1];
                }else{
                    $apellido2format = "";
                }
                if ($nombre != ''){
                    $nombreformat = $nombre[0];

                }else{
                    $nombreformat = "";
                }
                $usuario =  $apellido1format.$apellido2format.$nombreformat;
                $usuario = strtolower($usuario);
                $usuarios[] = $usuario;
            }
            return $usuarios; 
        };

        $usuarios = $crearusuarios($aUsuarios);
        $data = array('usuarios' => $usuarios);
        $this->renderHTML('../app/Views/usuarios_view.php', $data);
    }
}
