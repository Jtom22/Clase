// *
// Acciones(){
//     var aleatorio = Math.random();
//     document.write(aleatorio);
//     return aleatorio;
// }


while (true) {
    var aleatorio
    document.write(solicitudServidor());
}
 setInterval (document.write(solicitudServidor()), 5000);
function solicitudServidor(){
    setInterval(function(){
        var aleatorio = Math.random();
    },5000);
    return aleatorio;
  }
  
  
