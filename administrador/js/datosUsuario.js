var _ajax = new Ajax;
_ajax.setUrl('./server/Datos_Y_Rol.php');
let registros = new Array();
let accion = 'nombreCliente';
var idusuario = null;

$(document).ready(function(){    
    CargarTablaDatosCliente();
    CargarTablaDatosProfesores();
    CargarTablaDatosAdmin(); 

    $('#tabla_cliente tbody').on('click', '#btnEliminar', function(){
        var optionn = confirm('¿Desea eliminar este registro?')
        idusuario = $(this).closest('tr').find('td:first').text();
        console.log('ID ususario' +idusuario);
        if(optionn) {
            //$(this).parent().parent().remove()            
            eliminarUsuario();
            alert('Registro eliminado!');
        } else {
            alert('Has rechazado');
        }
        CargarTablaDatosCliente();
    });

    $('#tabla_profesores tbody').on('click', '#btnEliminar', function(){
        var optionn = confirm('¿Desea eliminar este registro?')
        idusuario = $(this).closest('tr').find('td:first').text();
        console.log('ID ususario' +idusuario);
        if(optionn) {
            //$(this).parent().parent().remove()            
            eliminarUsuario();
            alert('Registro eliminado!');
        } else {
            alert('Has rechazado');
        }
        CargarTablaDatosProfesores();
    });

    $('#tabla_admin tbody').on('click', '#btnEliminar', function(){
        var optionn = confirm('¿Desea eliminar este registro?')
        idusuario = $(this).closest('tr').find('td:first').text();
        console.log('ID ususario' +idusuario);
        if(optionn) {
            //$(this).parent().parent().remove()            
            eliminarUsuario();
            alert('Registro eliminado!');
        } else {
            alert('Has rechazado');
        }
        CargarTablaDatosAdmin(); 
    });
})

function CargarTablaDatosCliente(){    
    _ajax.go(
        ({
            function_response: onCargarDatosClientes,
            params: ({
                accion: 'cargarTablaCliente'
            })
        })
    );
}
    
function onCargarDatosClientes(data) {
    console.log(data);
    data = JSON.parse(data);       
    cargarTablaCliente(data); 
}

function cargarTablaCliente(data){
    registros = data;
    console.log(registros);
    $('#tabla_cliente tbody tr').remove();
  let filas = '';
    for (let i = 0; i < registros.length; i++) {
        filas += `<tr posicion="${i}">
                    <td>${registros[i].idusuario}</td>
                    <td>${registros[i].Apellido} ${registros[i].Nombre}</td>
                    <td>${registros[i].DNI}</td>
                    <td>${registros[i].Fecha_nacimiento}</td>
                    <td>${registros[i].Celular}</td>
                    <td>${registros[i].Nombre_Localidad}</td>
                    <td>${registros[i].Fecha_inscripcion}</td>
                    <td data-cell="Estado" style="   text-align: center;" >
                        <a name="activo" href="./cambiar_rol_cliente.php?idUsuario=${registros[i].idusuario}&apellido=${registros[i].Apellido}&nombre=${registros[i].Nombre}", id="btnIr",  class="is-ghost "><img src="../imagenes/cambiar.png" alt=""></a>
                        <button type="button" id="btnEliminar" class="is-ghost btnEliminar"><img src="../imagenes/borrar.png" alt=""></button>
                    </td>
                </tr>`;
    }
    $('#tabla_cliente').append(filas);
}

function CargarTablaDatosProfesores(){    
        _ajax.go(
          ({
            function_response: onCargarDatosProfesores,
            params: ({
                accion: 'cargarTablaProfesores'
            })
          })
        );
    }
      
function onCargarDatosProfesores(data) {
    console.log(data);
    data = JSON.parse(data);       
    cargarTablaprofesores(data); 
}

function cargarTablaprofesores(data){
    registros = data;
    console.log(registros);
    $('#tabla_profesores tbody tr').remove();
    let filas = '';
    for (let i = 0; i < registros.length; i++) {
        filas += `<tr posicion="${i}">
                    <td>${registros[i].idusuario}</td>
                    <td>${registros[i].Apellido} ${registros[i].Nombre}</td>
                    <td>${registros[i].DNI}</td>
                    <td>${registros[i].Fecha_nacimiento}</td>
                    <td>${registros[i].Celular}</td>
                    <td>${registros[i].Nombre_Localidad}</td>
                    <td>${registros[i].Fecha_inscripcion}</td>
                    <td data-cell="Estado" style="   text-align: center;" >
                        <a name="activo" href="./cambiar_rol_profesor.php?idUsuario=${registros[i].idusuario}&apellido=${registros[i].Apellido}&nombre=${registros[i].Nombre}", id="btnIr", class="is-ghost "><img src="../imagenes/cambiar.png" alt=""></a>
                        <button type="button" name="activo" id="btnEliminar" class="is-ghost "><img src="../imagenes/borrar.png" alt=""></button>
                    </td> 
                </tr>`;
      }
      $('#tabla_profesores').append(filas);
}

function CargarTablaDatosAdmin(){    
    _ajax.go(
        ({
        function_response: onCargarDatosAdmin,
        params: ({
            accion: 'cargarTablaAdmin'
        })
        })
    );
}
      
function onCargarDatosAdmin(data) {
    console.log(data);
    data = JSON.parse(data);       
    cargarTablaAdmin(data); 
}

function cargarTablaAdmin(data){
    registros = data;
    console.log(registros);
    $('#tabla_admin tbody tr').remove();
    let filas = '';
    for (let i = 0; i < registros.length; i++) {
        filas += `<tr posicion="${i}">
                    <td>${registros[i].idusuario}</td>
                    <td>${registros[i].Apellido} ${registros[i].Nombre}</td>
                    <td>${registros[i].DNI}</td>
                    <td>${registros[i].Fecha_nacimiento}</td>
                    <td>${registros[i].Celular}</td>
                    <td>${registros[i].Nombre_Localidad}</td>
                    <td>${registros[i].Fecha_inscripcion}</td>
                    <td data-cell="Estado" style="   text-align: center;" >
                        <a name="activo" href="./cambiar_rol_administrador.php?idUsuario=${registros[i].idusuario}&apellido=${registros[i].Apellido}&nombre=${registros[i].Nombre}", id="btnIr", class="is-ghost"><img src="../imagenes/cambiar.png" alt=""></a>
                        <button type="button" name="activo" id="btnEliminar" class="is-ghost "><img src="../imagenes/borrar.png" alt=""></button>
                    </td>
                </tr>`;
    }
    $('#tabla_admin').append(filas);
}

function eliminarUsuario(){    
    _ajax.go(
        ({
        function_response: onEliminarUsusario,
        params: ({
            accion: 'eliminarUsuario',
            idusuario: idusuario
        })
        })
    );
}

function onEliminarUsusario(data) {
    console.log(data);
    data = JSON.parse(data);
    CargarTablaDatosAdmin();
}