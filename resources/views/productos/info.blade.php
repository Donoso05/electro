
<div class="modal fade" id="edit{{$productos->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">EDITAR PRODUCTO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('productos.update', $productos->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="modal-body">
        <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <select name="idcategoria" class="form-control" id="">
            @foreach($categorias as $categorias)
            @if($categorias->id == $productos->idcategoria)
            <option value="{{$categorias->id}}" selected>{{$categorias->nombre}}</option>
            @else
            <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
            @endif
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" placeholder=""  value="{{$productos->nombre}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="" aria-describedby="helpId" placeholder="" value="{{$productos->cantidad}}"/>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" id="" aria-describedby="helpId" placeholder="" value="{{$productos->precio}}"/>
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
<div class="modal fade" id="delete{{$productos->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ELIMINAR PRODUCTO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('productos.destroy', $productos->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="modal-body">
    ¿Estás seguro de eliminar la categoría <strong>{{$productos->categoria->nombre}}</strong>?
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
</form>
    </div>
  </div>
</div>