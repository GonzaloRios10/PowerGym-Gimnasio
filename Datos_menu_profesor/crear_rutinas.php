<!DOCTYPE html>
<html>
  <head>
    <?php
      include('./head.php');
    ?>
    <link rel="stylesheet" href="../Datos_menu_profesor/estilos_datos_menu_profesor.css">        
    <script src="./evento.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="./js/ajax.js"></script>
    <script type="text/javascript" src="./js/crear_rutinas.js"></script>
  </head>
  <body>
    <!--Navbar-->
    <?php
      include('../menu/navbar_profesor.php');  
    ?>
  <section class="section main-profesor">
    <div class="container " style=" border: solid 3px white;margin-top:120px;">
      <div >
          <a name="Enviar" href="../menu/menu_profesor.php"  class="is-ghost "><b><ion-icon name="arrow-back-circle-sharp" style="font-size:60px;color:#f7f57d;"></ion-icon></b></a>
          <h2 class="info "  ><span ><u style="color:#f7f57d;">Crear</span ></u> Rutina</h2><br>
      </div>
      <div class="table-container">
        <form action="" method="POST"  >
          <div class="table-container " >
            <table class="table is-fullwidth" style="border-radius: 15px;">
              <tbody>
                <tr class="Personalestr">
                  <td  class="Personales">
                    <label class="label">Cliente:</label>
                    <div class="control">
                      <div class="control">
                        <div class="select" >
                          <select id="mySelect" name="Musculo" >
                            <option value="">Seleccione el Cliente</option>                            
                          </select>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="Personales">                      
                    <div class="control">
                      <label class="label"><ion-icon name="search-sharp"></ion-icon></label>
                      <input type="text" class="input " placeholder="Filtrar Cliente" id="myInput" style="color:black;" onkeyup="filterOptions()" >
                    </div>
                  </td>
                </tr>
              </body>
            </table>

            <table class="table is-fullwidth" style="border-radius: 15px;">
              <thead>
                <tr>
                  <th>Músculo <br> (Elegir ejercicios de un solo músculo por rutina)</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="control">
                      <div class="control">
                        <div class="select " >
                          <select  name="Musculo" id="select_musculos">
                            <option value="">Seleccione el Músculo</option>                            
                          </select> 
                          <td>
                            <button type="button" class="button  is-warning is-rounded" id="agregar-select">Agregar</button>
                          </td>                         
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
              <!-- <tabla Ejercicios> -->
            <table class="table is-fullwidth" style="border-radius: 15px;" id="tbl-rutinas">
              <thead>
                <tr>
                  <th>Ejercicios</th>
                  <th>Series</th>
                  <th>Repeticiones</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody id="table-body">                
              </tbody>
            </table>
            <div class="buttons ">
                <button type="button" id="btnEnviar" class="button is-warning is-rounded"><b>Enviar</b></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>  <hr class="shadow">
  <footer class="footer">
      <?php
      include('../footer/footer.php')
      ?>
  </footer> 
<script>/*
      const tableBody = document.getElementById("table-body");
      const agregarBtn = document.getElementById("agregar-select");
      agregarBtn.addEventListener("click", () => {
        const newRow = document.createElement("tr");
        const newSelect = document.createElement("div");
        newSelect.className = "select is-small";
        const newSelectTag = document.createElement("select");
        newSelectTag.innerHTML = `
        <option value="">Seleccione el Ejercicio</option>
        `;
        newSelect.appendChild(newSelectTag);
        const newInput1 = document.createElement("td");
        newInput1.innerHTML = `<input class="input is-small" type="number">`;
        const newInput2 = document.createElement("td");
        newInput2.innerHTML = `<input class="input is-small" type="number">`;
        const newDeleteBtn = document.createElement("button");
        newDeleteBtn.className = "button is-danger is-rounded";
        newDeleteBtn.textContent = "Eliminar";
        newDeleteBtn.addEventListener("click", () => {
          tableBody.removeChild(newRow);
        });
        const newCellSelect = document.createElement("td");
        newCellSelect.appendChild(newSelect);
        const newCellInput1 = document.createElement("td");
        newCellInput1.appendChild(newInput1);
        const newCellInput2 = document.createElement("td");
        newCellInput2.appendChild(newInput2);
        const newCellDeleteBtn = document.createElement("td");
        newCellDeleteBtn.appendChild(newDeleteBtn);
        newRow.appendChild(newCellSelect);
        newRow.appendChild(newCellInput1);
        newRow.appendChild(newCellInput2);
        newRow.appendChild(newCellDeleteBtn);
        tableBody.appendChild(newRow);
      });*/
    </script>
<!--filtrar nombre-->
  <script>
    function filterOptions() {
    // Obtener el valor del campo de búsqueda
    var input = document.getElementById("myInput");
    var filter = input.value.toUpperCase();

    // Obtener el select y las opciones
    var select = document.getElementById("mySelect");
    var options = select.getElementsByTagName("option");

    // Recorrer todas las opciones y ocultar las que no coincidan con el texto de búsqueda
      for (var i = 0; i < options.length; i++) {
        var text = options[i].textContent || options[i].innerText;
        if (text.toUpperCase().indexOf(filter) > -1) {
        options[i].style.display = "";
        } else {
        options[i].style.display = "none";
        }
        }
      }
  </script>

  </body>
</html>