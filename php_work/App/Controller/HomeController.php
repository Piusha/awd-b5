<?php
namespace Controller;
use \Core\Controller;
class HomeController extends Controller{

    protected $layout = "test";
    function index(){
        echo "This is index from home controller";
    }


    public function getUsers($data){
        //echo $this->view;
        

        $this->render('pages/home');
        //echo "Found Method and  called<br/> Data = {$data}";
    }
}