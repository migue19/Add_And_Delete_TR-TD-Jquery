$(document).ready(function(){
        // alert("hola estoy funcionando");
     })


$("#add").click(function(){

  console.log("agregar fila");
  //total de th dentro del primer tr (encabezado de la tabla)
   var tds= $("#tablaVentas tr:first th").length;
   var trs= $("#tablaVentas tr").length;

   var nuevaFila="<tr>";
            for(var i=0;i<tds;i++){
                // añadimos las columnas
                nuevaFila+="<td>columna "+(i+1)+" Añadida con jquery</td>";
            }
            // Añadimos una columna con el numero total de columnas.
            // Añadimos uno al total, ya que cuando cargamos los valores para la
            // columna, todavia no esta añadida
            nuevaFila+="</tr>";
            $("#tablaVentas").append(nuevaFila);

})

$("#del").click(function(){

  console.log("eliminar fila");
  var trs=$("#tablaVentas tr").length;
            if(trs>1)
            {
                // Eliminamos la ultima columna
                $("#tablaVentas tr:last").remove();
            }

})