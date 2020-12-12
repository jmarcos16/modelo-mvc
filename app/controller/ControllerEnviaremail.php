<?php

namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerEnviaremail extends ClassRender implements InterfaceView
{
    public function __construct()
    {
        $this->setTitle("Página Inicial");
        $this->setDescription("Sistema de Cobranças");
        $this->setKeywords("cobrança para empresas, sistemad de cobrança");
        $this->setDir("enviaremail");
        $this->renderLayout();
    }
}
