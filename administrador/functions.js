//ejemplo básico

$(document).ready(function(){
    
    
$("#e").on('click',function(){
    //Swal.fire('Ejemplo basico de Sweet Alert 2');
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'button is-warning is-rounded',
        cancelButton: 'button is-danger is-rounded'
      },
      buttonsStyling: false
    })
    
    swalWithBootstrapButtons.fire({
      title: '¿Estás seguro?',
      text: "¡No podrás revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'si, bórralo!',
      cancelButtonText: 'No, Cancelar!',
      reverseButtons: true,
    }).then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
          
          'Borrado',
          'El registro se ha eliminado.',
          'success' 
        
        
        )
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelado',
          'Tu registro está a salvo.',
          'error',
        )
      }
    })
  });	
  

  
  
})