
<!-- Modal -->
<div class="modal fade" id="edit{{$categorias->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGORIA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('categorias.update',$categorias->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder="" value="{{$categorias->nombre}}" />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" id="" aria-describedby="helpId" placeholder="" value="{{$categorias->descripcion}}" />
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
</form>
    </div>
  </div>
</div>









<!-- Modal -->
<div class="modal fade" id="delete{{$categorias->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR CATEGORIA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('categorias.destroy',$categorias->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">

        ¿Estas seguro de eliminar  <strong>{{$categorias->nombre}}</strong>?

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
</form>
    </div>
  </div>
</div>