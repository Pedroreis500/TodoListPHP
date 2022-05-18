<?php

namespace app\controllers;


/**
 * Interface que implenta um método para controlar as requisições
 */
interface HttpRequestInterfaceController 
{
    public function processaRequisicao(): void;
}


