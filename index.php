<?php

use app\controllers\DeleteController;
use app\controllers\InsertController;
use app\controllers\MarkAsDoneController;
use app\controllers\SelectAllPendingTaksController;
use app\controllers\SelectAllTasksController;
use app\controllers\UpdateController;

require_once __DIR__ . '/vendor/autoload.php';


        switch ($_SERVER['REQUEST_URI']) {
            case '/':
            case '/todas_tarefas':
                  $controlador = new SelectAllTasksController();
                  $controlador->processaRequisicao();
                break;

            case '/tarefas_pendentes':
                $controlador = new SelectAllPendingTaksController();
                $controlador->processaRequisicao();
                break;
        
            case '/nova_tarefa':
                  require 'src/app/views/nova_tarefa.php';
                break;

            case '/salvar_tarefa':
                $controlador = new InsertController();
                $controlador->processaRequisicao();
                header('location: src/app/views/nova_tarefa.php?sucesso=1');
                break; 

            case '/excluir-tarefa'.'?'.'id='.$_GET['id']:
                $controlador = new DeleteController();
                $controlador->processaRequisicao();
                break;            
                
            case '/edita_form':
                $controlador = new UpdateController();
                $controlador->processaRequisicao();
                break;    
                
            case '/altera_pendencia'.'?'.'id='.$_GET['id']:
                $controlador = new MarkAsDoneController();
                $controlador->processaRequisicao();
                break;    
                
            default:
               http_response_code(404);
                break;
        
        }
    
	