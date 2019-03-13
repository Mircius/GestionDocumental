<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>	


<div id="divVentaCliente"></div>
<div id="prueba2"></div>
<script>
    var ventas = {!! json_encode($venta->toArray(), JSON_HEX_TAG) !!} ;

    crearListaVentas(ventas);
    generarTablas("#prueba2",ventas,"/cliente/detalle/");
    function crearListaVentas(datos){
	var nombreColumnas = ['ID','Fecha','Estado'];
	var padre = '#divVentaCliente';
	
	visualizarDatos2(nombreColumnas, padre, ventas, undefined);
    }
    

</script>