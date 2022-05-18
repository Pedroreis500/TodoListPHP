<?php

namespace app\controllers;
use app\controllers\HttpRequestInterfaceController;
use app\database\Connection;
use app\models\Task;
use app\models\TaskService;

Class SelectAllPendingTaksController implements HttpRequestInterfaceController 
{
    public function processaRequisicao(): void
    {
		$tarefa = new Task();
		$tarefa->__set('id_status', 1); // pendente
		$conexao = new Connection();
		$tarefaService = new TaskService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperarTarefasPendentes();
		require '../todoListPHP/src/app/views/index.php';

    }
}   