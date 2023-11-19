<?php
namespace App\Controllers;
define("arrayletradni",array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'));


class DNIController extends BaseController
{
    public function dniAction()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlarray = explode('=', $url);
        $numeroDNI = end($urlarray);
        $letra  = arrayletradni[$numeroDNI % 23];
        $dnicompleto = $numeroDNI . $letra;

        $data = array('message'=>$dnicompleto);
        $this->renderHTML('../app/Views/dni_view.php',$data);
    }
    
    

}