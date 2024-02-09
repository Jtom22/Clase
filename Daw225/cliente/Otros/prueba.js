subcadena_1 = "Vaya";
subcadena_2 = "Playa"
subcadena_3 = "Yaya "
cadenaFinal = `Cadena:${subcadena_1}${subcadena_2}${subcadena_3}`;
document.write(cadenaFinal);

let mensaje = "Estas seguro de queres eliminar?";
let respuesta = confirm(mensaje);
console.log(`Respuesta del cuadro de diálogo: ${respuesta}.`);

let mensaje2 = "para eliminar escriba ELIMINAR";
let respuesta2 = prompt(mensaje);
console.log(`El usuario escribio:${respuesta2}.`)

let primero = segundo = 1;
buclePrincipal: while (true) {
    console.log(`(Bucle 1) Itereación ${primero}`);
    primero++;
    while (true) {
        console.log(`(Bucle 2) Itereación ${primero}`);
        segundo++;
        if (segundo == 5)
            break;
        else if (primero == 3) {
            break buclePrincipal;

        }

    }

}

for(let i=1;i<=10;i++){
let resultado=3 *i;
console.log(`3x ${i} = ${resultado}`);

}