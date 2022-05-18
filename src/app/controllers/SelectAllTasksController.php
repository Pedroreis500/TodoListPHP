<?php

namespace app\controllers;
use app\controllers\HttpRequestInterfaceController;
use app\database\Connection;
use app\models\Task;
use app\models\TaskService;



class SelectAllTasksController implements HttpRequestInterfaceController 
{

    public function processaRequisicao(): void
    {
		$tarefa = new Task();
		$conexao = new Connection();
		$tarefaService = new TaskService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperar();
		require '../todoListPHP/src/app/views/todas_tarefas.php';

    }
}