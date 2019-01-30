<?php

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexControler extends AbstractActionController
{
    public function indexAction(){
        echo "Alo Mundo!";
    }
    
}