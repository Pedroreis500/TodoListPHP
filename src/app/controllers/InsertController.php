<?php

namespace app\controllers;
use app\controllers\HttpRequestInterfaceController;
use app\database\Connection;
use app\models\Task;
use app\models\TaskService;

class InsertController implements HttpRequestInterfaceController 
{

    public function processaRequisicao(): void
    {
        
        $tarefa = new Task();
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $conexao = new Connection();
        $tarefaService = new TaskService($conexao, $tarefa);
        $tarefaService->inserir();
        header('location: src/app/views/nova_tarefa.php?sucesso=1');
    }

}
