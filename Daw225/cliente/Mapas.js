//Crea un mapa que contenga como claves 2 y "2" con valores asociados respectivamente "como número" y "como cadena". Muestra el mapa en la consola.¿Advierte de algún problema?
//b) Saca len consola el valor asociado a 2 primero como número y después como cadena.

const mapa = new Map;
mapa.set(2);
mapa.set("2");

console.log(mapa);

var mensaje = "Fuera de la función";
function mostrarAnuncio(){
    var mensaje = "Dentro de la función"

    console.log(mensaje);
}
mostrarAnuncio();
console.log(mensaje);

//ejercio 
var numero = prompt(mensaje);