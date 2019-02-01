<?php

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    public function indexAction(){
        echo "Alo Mundo!";
    }
    
    public function loginAction(){
        echo "<script>alert('Login');<script>Login";
    }
}