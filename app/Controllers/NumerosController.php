<?php

namespace App\Controllers;

class NumerosController extends BaseController
{

    public function numerosAction()
    {
        $numeros = [];
        for ($i = 0; $i < 20; $i++) {
            if ($i % 2 == 0) {
                $numeros[] = $i;
            }
        }

        $data = array('message' => "Lista de numeros: ", 'nums' => $numeros);
        $this->renderHTML('../app/Views/numeros_view.php', $data);
    }
    public function numeroscantidadAction()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlarray = explode('/', $url);
        $numero = end($urlarray);
        $numeros = [];
        $i = 0;
        while (count($numeros) < $numero) {
            if ($i % 2 == 0) {
                $numeros[] = $i;
            }
            $i++;
        }

        // for ($i = 0; $i < 1000; $i++) {
        //     if ($i % 2 == 0) {
        //         $numeros[] = $i;
        //     }
        //     if (count($numeros) == $numero) {
        //         break;
        //     }
        // }

        $data = array('message' => "Lista de numeros: ", 'nums' => $numeros);
        $this->renderHTML('../app/Views/numeros_view.php', $data);
    }
}
