<?php

namespace App\Controllers;


class FactorizarController extends BaseController
{
    public function factorizarAction()
    {
        $factores = array();
        $numerosprimos = array();
        $url = $_SERVER['REQUEST_URI'];
        $urlarray = explode('/', $url);
        $numero = intval(end($urlarray));


        for ($i = 2; $i <= $numero; $i++) {
            while ($numero % $i == 0) {
                $factores[] = $i;
                $numerosprimos[] = $numero;
                $numero /= $i;
            }



            
        }
        $numerosprimos[] = 1;
        $data = array('factores' => $factores, 'numerosprimos' => $numerosprimos);
            $this->renderHTML('../app/Views/factorizar_view.php', $data);
    }
}
