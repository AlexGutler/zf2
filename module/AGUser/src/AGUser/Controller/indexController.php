<?php

namespace AGUser\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class indexController extends AbstractActionController
{
    public function registerAction()
    {
        return new ViewModel();
    }
} 
