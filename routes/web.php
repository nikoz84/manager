<?php

use Illuminate\Support\Facades\Route;
use Cloudstudio\Ollama\Facades\Ollama;
use App\Models\Project;

Route::get('/projetos', function () {
    $projects = Project::all();
    return view('admin.projects.project-list', [
        'projects' => $projects
    ]);
});

Route::get('/ollama', function () {
    $response = Ollama::agent('responde em português')
        ->prompt('escreve um programa simples que sume dois números em php')
        ->model('llama3.1:8b')
        ->options(['temperature' => 0.5])
        ->stream(false)
        ->ask();

    return $response;
});
