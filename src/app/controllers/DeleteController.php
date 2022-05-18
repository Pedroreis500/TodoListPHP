<?php

namespace app\controllers;
use app\controllers\HttpRequestInterfaceController;
use app\database\Connection;
use app\models\Task;
use app\models\TaskService;

Class DeleteController implements HttpRequestInterfaceController
{
 
    public function processaRequisicao(): void
    {
           $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
           $tarefa = new Task();
           $tarefa->__set('id',  $id);
           $conexao = new Connection();
           $tarefaService = new TaskService($conexao, $tarefa);

           if( is_null($id) || $id === false)
           {
           header('location: /todas_tarefas');
           return;
           }
           
           $tarefaService->remover();
           header('location: /todas_tarefas');
    }


}