<!-- MODAL DE NUEVO CLIENTE FORM-->
<div class="modal" id="modalmodificar{{$proveedor->id}}" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header" style="display: flex; align-items: center;">
                <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Modificar proveedor</b></h5>
                <button type="button" id="btncerrar" class="btn-close" style="margin-right: 5%;" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" id="RegistrarCliente" method="POST" action="{{route('proveedor.update', $proveedor)}}" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="col-12">
                        <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                        <input type="text" id="inputnombre" name="nombre" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del cliente" required value="{{old('nombre' , $proveedor->nombre)}}">
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Teléfono:</label>
                        <input type="text" id="inputtelefono" name="telefono" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el teléfono del cliente" required value="{{old('telefono' , $proveedor->telefono)}}">
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Correo electrónico:</label>
                        <input type="text" id="inputcorreo"  name="correo" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el correo electrónico del cliente" required value="{{old('correo' , $proveedor->correo)}}">
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Marca:</label>
                        <input type="text" id="inputidentificacion" name="marcaDistribuida" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa la marca del proveedor" required value="{{old('marcaDistribuida' , $proveedor->marcaDistribuida)}}">
                    </div>
                    <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                        <button type="submit" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL DE NUEVO CLIENTE FORM-->