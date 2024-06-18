<!-- MODAL DE ACTUALIZAR producto FORM-->
<div class="modal fade" id="exampleModalCenteredScrollable{{$producto->id}}" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="border-radius: 15px;">
            <div class="modal-header" style="display: flex; align-items: center;">
                <span class="vertical-line" style="width: 4.5px; height: 26px; background-color: #F63A3D; vertical-align: middle; margin-left: 25%; margin-right: 2%;"></span>
                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle" style="top: 25%;"><b>Modificar producto</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('producto.update', $producto->id)}}" class="row g-3" id="RegistrarCliente">
                    @csrf
                    @method('PATCH')
                    <div class="col-12">
                        <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Código:</label>
                        <input name="codigo" value="{{old('codigo', $producto->codigo)}}" type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del producto" required id="inputnombre">
                    </div>
                    <div class="col-12">
                        <label for="cedulas" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Nombre:</label>
                        <input name="nombre" value="{{old('nombre', $producto->nombre)}}" type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingrese el nombre del producto" required id="inputnombre">
                    </div>
                    <div class="col-12">
                        <label for="nombres" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Tipo producto:</label>
                        <select name="tipoProducto" class="form-select" id="comboboxservicio" style="width: 100%; background-color: #fff; border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; border: 2px solid #e5e5e5; margin-bottom: 8px;" required>
                            <option value="{{old('tipoProducto', $producto->tipoProducto)}}">{{$producto->tipoProducto}}</option>
                            <option value="REPUESTO">REPUESTO</option>
                            <option value="ACCESORIO">ACCESORIO</option>
                            <option value="INSUMO">INSUMO</option>
                        </select>
                        <!--<label for="nombres" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Tipo producto:</label>
                                <input type="text" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="ingrese el nombre del producto" required>-->
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Costo:</label>
                        <input name="precioCompra" value="{{old('precioCompra', $producto->precioCompra)}}" type="number" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el costo del producto" required id="inputcosto" oninput="formatCurrencyColombian(this)">
                    </div>
                    <div class="col-12">
                        <label for="direccion" class="form-label" style="font-size: 16px; margin-bottom: -1.5px; font-weight: 501;">Precio:</label><br>
                        <input name="precioVenta" value="{{old('precioVenta', $producto->precioVenta)}}" type="number" class="form-control2" style="border-radius: 4px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; width: 100%; background-color: #fff; border: 2px solid #e5e5e5; margin-bottom: 8px;" placeholder="Ingresa el precio del producto" required id="inputprecio" oninput="formatCurrencyColombian(this)">
                    </div>
                    <div class="modal-footer" style="display: flex; align-items: center; justify-content: center;">
                        <button type="submit" id="btnguardar" style="width: 85%; left: 0%; margin-bottom: 10%;" class="btn btn-primary">Modificar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>