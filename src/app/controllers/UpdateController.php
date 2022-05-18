<?php
namespace app\controllers;
use app\controllers\HttpRequestInterfaceController;
use app\database\Connection;
use app\models\Task;
use app\models\TaskService;

Class UpdateController implements HttpRequestInterfaceController 
{
    public function processaRequisicao(): void
    {
        $tarefa = new Task();
		$tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);
        $conexao = new Connection();
        $tarefaService = new TaskService($conexao, $tarefa);
        $tarefaService->atualizar();
        header('location: /todas_tarefas');
    }
}

