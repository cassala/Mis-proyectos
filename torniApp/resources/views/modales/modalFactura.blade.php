@php
$efectivo = session('efectivo');
$cambio = session('cambio');
$detalles = $_SESSION['detallesFactura'];
@endphp
<div class="modal fade" id="modal-factura" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img src="css/css-facturacion/imagenes/wof.png" style=" right: 0; width:  25%; height: 7%; margin-bottom: 0;" />
                <p style="font-size: small; font-weight: 400; text-align: right; margin-left: 47%;">Tornimotos<br>
                    Cra. 24 #23-91<br>
                    Palmira, valle del cauca<br>
                    317 3470955</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-right: 3%;"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h4 style="text-align: left;">Información del cliente</h4>
                    <p style="text-align: left;"><strong>Nombre: </strong>{{session('nombreCliente')}}</p>
                    <p style="text-align: left;"><strong>Idetificacion: </strong>{{session('cedulaCliente')}}</p>
                    <h4 style="text-align: left;">Info de la factura</h4>
                    <p style="text-align: left;"><strong>Numero factura: </strong>{{session('idFactura')}}</p>
                    <p style="text-align: left;"><strong>Fecha: </strong>{{session('fechaFactura')}}</p>
                    <div class="card tablaDedatos" id="tablaDedatosmodal" style="border: none;">
                        <div class="row">
                            <div class="col-sm-12 mt-4">
                                <div class="table-responsive-lg">
                                    <table id="tablaapp" class="table" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th scope="col" id="EncabezadosTablaFac1">Producto</th>
                                                <th class="text-center" id="EncabezadosTablaFac2">Cantidad</th>
                                                <th class="text-center" scope="col" id="EncabezadosTablaFac3">PrecioUnitario</th>
                                                <th class="text-center" scope="col" id="EncabezadosTablaFac4">Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detalles as $detalle)
                                            <tr>
                                                <td style="text-align: center;">{{$detalle->producto->nombre ?? $detalle->servicio}}</td>
                                                <td style="text-align: center;">{{$detalle->cantidad ?? 1}}</td>
                                                <td style="text-align: center;">{{$detalle->producto->precioVenta ?? $detalle->costoDetalle}}</td>
                                                <td style="text-align: center;">{{$detalle->costoDetalle}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div style="float: right;">
                                <p style="float :right; color: #000; font-weight: 600;">IVA: $ {{number_format(session('ivaFactura'))}}</p><br>
                                <p style="float :right; color: #000; font-weight: 600;">Total sin iva: $ {{number_format(session('totalSinIva'))}}</p><br>
                                <p style="float :right; color: #000; font-weight: 600;">Total a Pagar: $ {{number_format(session('totalFactura'))}}</p><br>
                                <p style="float :right; color: #000; font-weight: 600;">Efecivo: $ {{number_format($efectivo)}}</p><br>
                                <p style="float :right; color: #000; font-weight: 600;">Cambio: $ {{$cambio}}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <form action="{{route('factura.store')}}" method="POST">
                        @csrf
                        <button type="submit" id="imprimir" data-bs-dismiss="modal" aria-label="Close">
                            <img style="width: 10%; float: right; height: 10%;" src="../css/fonts/flat-color-icons--print.png" >
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>