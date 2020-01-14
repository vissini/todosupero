{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

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
      <div class="card-body p-0">
        <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#modal-default">
          Adicionar Tarefa
        </button>
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        #
                    </th>
                    <th style="width: 20%">
                        Title
                    </th>
                    <th style="width: 30%">
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
                    <a class="btn btn-info btn-sm" href="#">
                      <i class="fas fa-pencil-alt">
                      </i>
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
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

    <div class="modal fade" id="modal-default">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Default Modal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop