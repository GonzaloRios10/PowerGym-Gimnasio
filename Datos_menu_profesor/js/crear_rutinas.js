var _ajax = new Ajax;
var contadorFilas = -1, arrayEjercicios = new Array();
_ajax.setUrl('./server/crearRutinas.php');

$(function() {
    
    select_musculos();    
    seleccionarUsuario();
    
    $('#select_musculos').change(function() {
        eliminarColumnas();
        seleccionarEjercicios();
    });

    $('#agregar-select').click(function() {
        caratTabla();
    });

    $('#table-body').on('click', '.btnEliminar', function(){
        var optionn = confirm('¿Desea eliminar este registro?')
        if(optionn) {
            $(this).parent().parent().remove()            
        }
    });

    $('#btnEnviar').click(function() {
        enviarEjercicio();
    });
})

function select_musculos() {
    _ajax.go(
      ({
        function_response: onSelect_musculos,
        params: ({
            accion: 'select_musculos'
        })
      })
    );
}
  
function onSelect_musculos(data) {
    console.log(data);
    data = JSON.parse(data);       
    cargar_select_musculos(data); 
    
}

function cargar_select_musculos(data){
    console.log(data);
    var option = '';
    for (var i = 0; i < data.length; i++) {
        option += '<option value="' + data[i]['idGrupo_Muscular'] + '">' + data[i]['Musculo'] + '</option>';
    }                                
    $('#select_musculos').append(option);
}

function seleccionarUsuario() {
    _ajax.go(
      ({
        function_response: onSeleccionarUsuario,
        params: ({
            accion: 'mySelect'
        })
      })
    );
}

function onSeleccionarUsuario(data) {
    console.log(data);
    data = JSON.parse(data);
    cargar_select_usuario(data);
}

function cargar_select_usuario(data){
    console.log(data);
    var option = '';
    for (var i = 0; i < data.length; i++) {
        option += '<option value="' + data[i]['idusuario'] + '">' + data[i]['idusuario'] + ' - ' + data[i]['Nombre'] + '  ' + data[i]['Apellido'] + '</option>';
    }
    $('#mySelect').append(option);
}

function seleccionarEjercicios() {
    _ajax.go(
        ({
        function_response: onSeleccionarEjercicios,
        params: ({
            accion: 'selectEjercicios',
            select_musculos: $('#select_musculos').val(),
        })
      })
    );
}
    
function onSeleccionarEjercicios(data) {
    console.log(data);
    data = JSON.parse(data);
    for (let i = 0; i < contadorFilas; i++) {
        limpiarSelect('#selectEjercicios' + i);
    }
    cargar_select_ejercicios(data);
}

function cargar_select_ejercicios(data){
    console.log(data);
    var option = '';
    for (var i = 0; i < data.length; i++) {
        option += '<option value="' + data[i]['idEjercicios'] + '">' + data[i]['Nombre_eje'] + '</option>';
    }
    for (let i = 0; i <= contadorFilas; i++) {
        $('#selectEjercicios' + i).append(option);
    }
}

function enviarEjercicio() {
    if ($('#mySelect').val() == ""){ alert('INGRESE EL NOMBRE DE USUARIO'); return; }
    if ($('#select_musculos').val() == ""){ alert('INGRESE EL MUSCULO'); return; }

    arrayEjercicios = [];

//    $('#table-body tbody tr').each(function() {
    $('#table-body tr').each(function() {
        var ejecicio = $(this).find('td:eq(0) select').val();
        var series = $(this).find('td:eq(1) input').val();
        var repeticiones = $(this).find('td:eq(2) input').val();

        arrayEjercicios.push({
            series: series,
            repeticiones: repeticiones,
            ejecicio: ejecicio
        })
    });

    for (const i of arrayEjercicios) {
        if (i.ejecicio == ""){ alert('INGRESE EL EJERCICIO'); return; }
        if (i.series == ""){ alert('INGRESE LA CANTIDAD DE SERIES'); return; }
        if (i.repeticiones == ""){ alert('INGRESE LA CANTIDAD DE REPETICIONES'); return; }
    }
    alert("Rutina Enviada");

    console.log(arrayEjercicios);
    
    _ajax.go(
        ({
            function_response: onEnviarEjercicios,
            params: ({
                accion: 'enviarEjercicio',
                idusuario: $('#mySelect').val(),
                selectMusculo: $('#select_musculos').val(),
                arrayEjercicios: arrayEjercicios
            })
        })        
    );
    limpiarSelect('#select_musculos');
    select_musculos();
    eliminarColumnas();
}

function onEnviarEjercicios(data) {
    console.log(data);
    data = JSON.parse(data);
    for (let i = 0; i < contadorFilas; i++) {
        limpiarSelect('#selectEjercicios' + i);
    }
    cargar_select_ejercicios(data);
}

function limpiarSelect(_id){
    $(_id + ' option').each(function(){
      $(_id + ' option').eq(1).remove();
    });
}

function eliminarColumnas() {
    $('#table-body tr').each(function(){
        (this).remove();
    });
}

function caratTabla() {
    _ajax.go(
      ({
        function_response: onCargarTabla,
        params: ({
            accion: 'selectEjercicios',
            select_musculos: $('#select_musculos').val(),
        })
      })
    );
}
  
function onCargarTabla(data) {
    console.log(data);
    data = JSON.parse(data);
    nuvaFila(data);
    seleccionarEjercicios();    
}

function nuvaFila(data){
    contadorFilas ++;
    var filas = `<tr>
                    <td>
                      <div class="control">
                        <div class="select is-small">
                            <select id="selectEjercicios${contadorFilas}" name="Ejercicio">
                                <option value="">Seleccione el Ejercicio</option>
                            </select>
                        </div>
                      </div>
                    </td>
                    <td><input id="Series" class="input is-small" style="width: 100px" type="number"  min="1" max="6" placeholder="Cantidad"></td>
                    <td><input id="Repeticiones" class="input is-small" style="width: 100px" type="number" min="1" max="50"  placeholder="Cantidad"></td>
                    <td><button type="button" id="btnEliminar${contadorFilas}" class="button is-warning is-rounded btnEliminar"><b>Eliminar</b></button></td>
                </tr>`;
    $('#table-body').append(filas);
}