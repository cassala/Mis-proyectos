 <!-- MODAL DE ACTUALIZACIÓN DE SERVICIO FORM-->

 <div class="modal fade" id="exampleModalCenteredScrollable{{$servicio->id}}" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="padding-bottom: -10%; height: 10%; border-bottom: none; align-items: right; ">
                <img src="/css/css-facturacion/imagenes/wof.png" style=" left: 80%; right: 0; width:  25%; height: 3%; margin-bottom: -8%; height: 3%;" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-right: 3%;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h4 style="text-align: center; border: 2px solid #8a92a6; text-justify: center; padding-top: 10px; margin-bottom: 4%;"> Formato de recepción de motocicletas</h4>
                    <label for="validationCustom01" class="form-label" style="width: 87.06px; width: 100%; float: left;  border-bottom: 2px solid #8a92a6; margin-bottom: 4%; text-align: left;">Datos:</label>
                    <form method="POST" action="{{ route("servicio.update", $servicio) }}" id="formServicio" class="row g-3 " novalidate>
                        @csrf
                        @method ('PATCH')
                        <div class="col-md-6" style="display: flex; justify-content: space-between;">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center" style="display: flex;">
                                    <label for="validationCustom01" class="form-label me-2" style="width: 87.06px; text-align: left;">Cedula:</label>
                                    <input readonly value="{{old('cedula', $servicio->cliente->cedula ?? null)}}" name="cedula" type="number" min="1" class="form-control" id="inputcliente" required placeholder="      Buscar" style="float: right; background-color: #f0e0f0">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <label for="inputCantidad" class="form-label me-2" style="width: 87.06px;">Placa:</label>
                                    <input value="{{old('placa', $servicio->placa)}}" name="placa" type="text" class="form-control" id="inputplaca" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="display: flex; justify-content: space-between;">
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <label for="validationCustom02" class="form-label me-2" style="width: 87.06px; text-align: left;">Modelo:</label>
                                    <input value="{{old('modelo', $servicio->modelo)}}" name="modelo" type="text" class="form-control" id="inputmodelo" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center">
                                    <label for="validationCustom02" class="form-label me-2" style="width: 87.06px;">Marca:</label>
                                    <input value="{{old('marca', $servicio->marca)}}" name="marca" type="text" class="form-control" required id="inputmarca">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        </div><br>
                        <div class="linea-horizontal" style="height: 1.8px; background-color: #8a92a6; width: 100%;"></div><br>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Cambiada de aceite</label>
                                <input disabled name="ca" type="checkbox" id="cambiadadeaceite" value="Cambiada de aceite" style="margin-left: 5%; margin-bottom: 1px;" required>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Radiada y acobalada de rines</label>
                                <input disabled name="rar" type="checkbox" id="cambiadadeaceite" value="Radiada y acobalada de rines" style="margin-left: 5%; margin-bottom: 1px;" required>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Carga de baterias</label>
                                <input disabled name="cb" type="checkbox" id="cambiadadeaceite" value="Carga de baterias" style="margin-left: 5%; margin-bottom: 1px;" required>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Montallantas</label>
                                <input disabled name="mll" type="checkbox" id="cambiadadeaceite" value="Montallantas" style="margin-left: 5%; margin-bottom: 1px;" required>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Mantenimiento preventivo</label>
                                <input disabled name="mp" type="checkbox" id="cambiadadeaceite" value="Mantenimiento preventivo" style="margin-left: 5%; margin-bottom: 1px;" required>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Mantenimiento general</label>
                                <input disabled name="mg" type="checkbox" id="cambiadadeaceite" value="Mantenimiento general" style="margin-left: 5%; margin-bottom: 1px;" required>
                            </div>
                        </div>
                        <div class="col-md-6"></div><br><br>
                        <div class="linea-horizontal" style="height: 1.8px; background-color: #8a92a6; width: 100%;"></div><br>
                        <div style="display: flex; justify-content: space-between;"><label for="validationCustom02" class="form-label me-2" style="margin-right: 5%; width: 258.68px; text-align: left;">Observaciones</label><br></div>
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <textarea name="observaciones" id="observaciones" style="border: 2px solid #8a92a6;" rows="5" cols="100%">{{old('observaciones', $servicio->observaciones ?? '')}}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!--<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 3%;"></button>-->
                            <button type="submit" id="imprimir">
                                <span class="iconify" data-icon="flat-color-icons:print" style="width: 300%; height: 300%; float: right; right: 0;"></span>
                            </button>
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
</div>