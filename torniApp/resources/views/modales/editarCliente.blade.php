    <!-- MODAL DE EDITAR CLIENTE FORM-->
    <!-- MODAL DE EDITAR CLIENTE FORM-->
    <div class="modal fade" id="modalmodificar{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content" style="border-radius: 15px;">
                <div class="modal-header" style="display: flex; align-items: center;">
                    <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Modificar cliente</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('cliente.update', $cliente)}}" class="row g-3" id="RegistrarCliente" novalidate>
                        @csrf
                        @method('PATCH')
                        <div class="col-12">
                            <label for="cedula" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Identificación:</label>
                            <input name="cedula" value="{{old('cedula', $cliente->cedula)}}" type="text" id="inputidentificacion" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa la identificación del cliente" required>
                        </div>
                        <div class="col-12">
                            <label for="nombre" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                            <input name="nombre" value="{{old('nombre', $cliente->nombre)}}" type="text" id="inputnombre" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del cliente" required>
                        </div>
                        <div class="col-12">
                            <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Teléfono:</label>
                            <input name="telefono" value="{{old('telefono', $cliente->telefono)}}" type="text" id="inputtelefono" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el teléfono del cliente" required>
                        </div>
                        <div class="col-12">
                            <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Correo electrónico:</label>
                            <input name="correo" value="{{old('correo', $cliente->correo)}}" type="text" id="inputcorreo" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el correo electrónico del cliente" required>
                        </div>
                        <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                            <button type="submit" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Modificar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>