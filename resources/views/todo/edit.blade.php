{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Adicionar Todo List</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      <div class="card-body ">
    
        <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <!-- /.box-header -->
              <!-- form start -->
              @include('_errors')
              <form role="form" method="POST" action="{{ route('todo.update', ['todo'=>$todo->id]) }}">
                {{method_field('PUT')}}
                @include('todo._form')
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Alterar Tarefa</button>
                  <a href="{{ route('todo.index') }}" class="btn btn-default">Cancelar</a>
                </div>
              </form>
            </div>
            <!-- /.box -->  
          </div>
        </div>
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