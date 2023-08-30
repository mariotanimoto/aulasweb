<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$dadosalunos = array(
    "Marcos Aurélio",
    "Maria Cláudia",
     "João Pedro"
);



Route::get('/', function () {

    return view('welcome');
});

Route::get('/aluno', function() {
   
    $alunos = "<ul>";
        foreach ($dadosalunos as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
            if ($cont >= count($dadosalunos)){
                break;
            }
                
        }
    $alunos .= "<li>$nome</li>";
    return $alunos;
});

Route::get('/aluno/limite/{total}', function ($total) {
   
    $alunos = "<ul>";
    if ($total <= count($dadosalunos)) {
        $cont = 0;
        foreach ($dadosalunos as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
            if ($cont >= $total)
                break;
        }
    } else {
        $alunos = $alunos . "<li>Tamanho Máximo = " . count($dadosalunos) . "</li>";
    }
    $alunos .= "</ul>";
    return $alunos;
});

Route::get('/aluno/matricula/{matricula}', function ($index) {
       
    $aluno = $dadosalunos[$index];
    return $aluno;
    
});

Route::get('/aluno/nome/{procura}', function ($procura) {
   
    
        foreach ($dadosalunos as $nome) {
           if($nome==$procura){
                break;
           };
        };

    return $nome;
});

Route::get('/nota', function() {
   
    $notas = "<ul>";
        foreach ($dadosalunos as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
            if ($cont >= count($dadosalunos)){
                break;
            }
                
        }
    $alunos .= "<li>$nome</li>";
    return $alunos;
});

Route::get('/aluno/limite/{total}', function ($total) {
   
    $alunos = "<ul>";
    if ($total <= count($dadosalunos)) {
        $cont = 0;
        foreach ($dadosalunos as $nome) {
            $alunos .= "<li>$nome</li>";
            $cont++;
            if ($cont >= $total)
                break;
        }
    } else {
        $alunos = $alunos . "<li>Tamanho Máximo = " . count($dadosalunos) . "</li>";
    }
    $alunos .= "</ul>";
    return $alunos;
});

Route::get('/aluno/matricula/{matricula}', function ($index) {
       
    $aluno = $dadosalunos[$index];
    return $aluno;
    
});

Route::get('/aluno/nome/{procura}', function ($procura) {
   
    
        foreach ($dadosalunos as $nome) {
           if($nome==$procura){
                break;
           };
        };

    return $nome;
});
