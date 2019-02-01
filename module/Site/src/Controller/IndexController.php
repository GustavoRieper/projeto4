<?php

namespace Site\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function homeAction()
    {
        return new ViewModel();
        //echo "Aqui é o home";
    }
    public function servicosAction()
    {
        return new ViewModel();
        //echo "Aqui é o serviços";
    }
}
