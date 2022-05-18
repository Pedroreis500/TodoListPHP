<?php

namespace app\controllers;
use app\controllers\HttpRequestInterfaceController;
use app\database\Connection;
use app\models\Task;
use app\models\TaskService;

/**
 * Controlador para marcar as tarefas como realizada
 */
Class MarkAsDoneController implements HttpRequestInterfaceController 
{
    public function processaRequisicao(): void
    {
        
		$tarefa = new Task();
		$tarefa->__set('id', $_GET['id'])->__set('id_status', 2); // realizado
		$conexao = new Connection();
		$tarefaService = new TaskService($conexao, $tarefa);
		$tarefaService->marcarRealizada();
        header('location: /todas_tarefas');
    }
}   