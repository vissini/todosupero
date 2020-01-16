<div class="box-body">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title">Tarefa</label>
      <input type="text" class="form-control" name='title' id="title" placeholder="Título" value="{{ old('title',$todo->title) }}">
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select name="status" id="status" class="form-control">
        <option value="aberto" {{ (old("status",$todo->status) == 'aberto' ? "selected":"") }}>Aberto</option>
        <option value="fechado" {{ (old("status",$todo->status) == 'fechado' ? "selected":"") }}  >Fechado</option>
      </select>
    </div>
      <div class="form-group">
        <label for="status">Description</label>
      <textarea class="form-control" name='description' id="description" placeholder="Descrição da Tarefa">{{ old('description',$todo->description) }}</textarea>
    </div>
</div>
<!-- /.box-body -->