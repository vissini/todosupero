{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Todo List')

@section('content')

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Todo List</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body">
        <a class="btn btn-primary mb-3" href="{{ route('todo.create') }}">Adicionar Tarefa</a>
        @include('_errors')
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Status
                    </th>
                    <th>
                        Description
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
              @forelse ($todoList as $todo)
                @php
                if ($todo->status === "fechado"){
                  $line = "style=text-decoration:line-through";
                }else{
                  $line = "";
                }
                @endphp
                <tr>
                  <td {{ $line }}>
                    {{ $todo->id }}
                  </td>
                  <td {{ $line }}>
                    {{ $todo->title }}
                  </td>
                  <td {{ $line }}>
                    {{ $todo->status }}
                  </td>
                  <td {{ $line }}>
                    {{ $todo->description }}
                  </td>
                  <td class="project_progress">
                    <a class="btn btn-info btn-sm" href=" {{ route('todo.edit',  ['todo'=>$todo->id]) }} ">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Editar
                    </a>
                    <a class="btn btn-warning btn-sm" href=" {{ route('todo.close',  ['todo'=>$todo->id]) }} ">
                      <i class="fas fa-window-close">
                      </i>
                      Fechar
                    </a>
                    <a class="btn btn-danger btn-sm" href=" {{ route('todo.destroy',  ['todo'=>$todo->id]) }} "
                      onclick="event.preventDefault(); if(confirm('Deseja apagar a Tarefa')){document.getElementById('form-todo-delete-{{ $todo->id }}').submit();}"
                    >
                      <i class="fas fa-trash">
                      </i>
                      Apagar
                    </a>
                    <form id="form-todo-delete-{{ $todo->id }}" style="display:none" action="{{ route('todo.destroy', ['todo'=>$todo->id]) }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                  </td>
                </tr>
              @empty
                <tr><td colspan="5">Nenhum registro encontrado!</td></tr>  
              @endforelse 
            </tbody>
        </table>
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