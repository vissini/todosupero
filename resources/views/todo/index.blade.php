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
        <a class="btn btn-primary" href="{{ route('todo.create') }}">Adicionar Tarefa</a>
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
                <tr>
                  <td>
                    {{ $todo->id }}
                  </td>
                  <td>
                    {{ $todo->title }}
                  </td>
                  <td>
                    {{ $todo->status }}
                  </td>
                  <td>
                    {{ $todo->description }}
                  </td>
                  <td class="project_progress">
                    <a class="btn btn-info btn-sm" href=" {{ route('todo.edit',  ['todo'=>$todo->id]) }} ">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href=" {{ route('todo.destroy',  ['todo'=>$todo->id]) }} "
                      onclick="event.preventDefault(); if(confirm('Deseja apagar a Tarefa')){document.getElementById('form-todo-delete-{{ $todo->id }}').submit();}"
                    >
                      <i class="fas fa-trash">
                      </i>
                      Delete
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