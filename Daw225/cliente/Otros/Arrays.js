 
let array1=new Array();

let array2=[];


//array con elementos 
//let arrayk = new array(2);

let arrayx=[1,3];
console.log(array1);
console.log(array1[0]);


//let precios= [69,99,12,49,35,20,99,90];
//for (let i = 0; i < precios.length; i++) {
    //console.log(`El precio ${1} es: ${precios[i]}`)
    
//}

//Problema 3.1 
//a Construye un array que almacene el nombre de cinco localidades a tu eleccion y lo muestre en pantalla
let arrayCdd=["Zaragoza","Madrid","Barcelona","Lugo","Salamanca"];
console.log(arrayCdd);
for (let i = 0; i < localidades.length; i++) {
    if (i % 2 !== 0) {
        console.log(localidades[i]);
    }
   
    
}

//Ahora haz que aparezca solo las posiciones impar
let sinIVA= [69,99,12,49,69];
let conIVA = sinIVA;
conIVA[0]=110.25;
console.log(sinIVA);
console.log(conIVA)


//añadir elementos a un array
let elementos=[ "a",7,true];//añade elemento en un lugar concreto
elementos[3]=23.45;

let elementos=["a",7,true];//Añade elemento al final
elementos.push("xyz");

let elementos=[ "a",7,true];
elementos.unshift("el primero");//añade un elemento al principio

let elementos=[ "a",7,true];
elementos.shift();//Obtiene y elminia el primer elemento 
elementos.pop();//Obtiene y elminia el ultimo elemento

let elementos=[ "a",7,true, 50.54,7,"Marcos"];
let aguja=7;
let resultado = pajar.indexOf(aguja);