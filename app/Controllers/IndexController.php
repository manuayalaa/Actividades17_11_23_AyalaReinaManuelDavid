<?php
namespace App\Controllers;
class IndexController extends BaseController
{
    public function indexAction()
    {
        $data = array('message'=>'Hola mundo');
        $this->renderHTML('../app/Views/index_view.php',$data);
    }
    public function saludaAction()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlarray = explode('/',$url);
        $nombre = end($urlarray);
        $data = array('message'=>'Hola '. $nombre);
        $this->renderHTML('../app/Views/saluda_view.php',$data);
    }
    

}