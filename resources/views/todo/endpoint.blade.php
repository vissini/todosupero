{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Todo List')

@section('content_header')
    <h1>Todo List - EndPoints</h1>
@stop

@section('content')

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><span class="btn btn-warning">GET</span> - <i>/api/todo</i> - Listar Tarefas</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        Este endpoint irá retornar os registros da Todo List.

        Exemplo de retorno:
        <pre><code>
          {
            "todoList": [
                {
                    "id": 2,
                    "title": "Start-up shell",
                    "status": "fechado",
                    "description": null,
                    "closed_at": "2020-01-15 21:30:15",
                    "created_at": "2020-01-15 02:07:47",
                    "updated_at": "2020-01-15 21:30:15"
                },
                {
                    "id": 3,
                    "title": "Tarefa 1",
                    "status": "fechado",
                    "description": "Teste",
                    "closed_at": "2020-01-15 22:19:20",
                    "created_at": "2020-01-15 02:19:19",
                    "updated_at": "2020-01-15 22:19:20"
                }
            ]
        }
        </code></pre>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><span class="btn btn-success">POST</span> - <i>/api/todo</i> - Inserir Tarefa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        Este endpoint serve para inserir tarefas na Todo List.

        Valores possíveis:
        <table class="table">
          <thead><tr><th>Descrição</th><th>Parametro</th><th>Tipo</th><th></th>Obrigatório</tr></thead>
          <tbody>
            <tr><td>Título</td><td>title</td><td>String (255)</td><td>Sim</td></tr>
            <tr><td>Descrição</td><td>description</td><td>Text</td><td>Não</td></tr>
            <tr><td>Status</td><td>status</td><td>Enum (aberto, fechado)</td><td>Sim</td></tr>
          </tbody>
        </table>

        Exemplo de retorno:
        <pre><code>
          {
            "title": "Teste API",
            "updated_at": "2020-01-15 22:48:38",
            "created_at": "2020-01-15 22:48:38",
            "id": 5
        }
        </code></pre>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><span class="btn btn-primary">PUT</span> - <i>/api/todo/{id}</i> - Alterar Tarefa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        Este endpoint serve para alterar dados de uma tarefas na Todo List.

        Valores possíveis:
        <table class="table">
          <thead><tr><th>Descrição</th><th>Parametro</th><th>Tipo</th><th></th>Obrigatório</tr></thead>
          <tbody>
            <tr><td>Título</td><td>title</td><td>String (255)</td><td>Sim</td></tr>
            <tr><td>Descrição</td><td>description</td><td>Text</td><td>Não</td></tr>
            <tr><td>Status</td><td>status</td><td>Enum (aberto, fechado)</td><td>Sim</td></tr>
          </tbody>
        </table>

        Exemplo de retorno:
        <pre><code>
          {
            "title": "Teste API",
            "updated_at": "2020-01-15 22:48:38",
            "created_at": "2020-01-15 22:48:38",
            "id": 5
        }
        </code></pre>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><span class="btn btn-danger">DESTROY</span> - <i>/api/todo/{id}</i> - Apagar Tarefa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        Este endpoint serve para apagar tarefa na Todo List.
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->


    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><span class="btn btn-danger">GET</span> - <i>/api/todo/close/{id}</i> - Fechar Tarefa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        Este endpoint serve para fechar a tarefa na Todo List.
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop