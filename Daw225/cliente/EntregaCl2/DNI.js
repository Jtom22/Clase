let mensaje = "Introduce tu dni";
let dni = prompt(mensaje);
let letra= dni[8];
let numero= parseInt(dni);
let clave= numero % 23;

abecedario='TRWAGMYFPDXBNJZSQVHLCKE';
let letraBuscada=abecedario[clave];

if (dni.length!=9) {
   alert("El tamaño del dni no es correcto")
}else{
    if (letra==letraBuscada) {
    
        const regex = /^[0-9]*$/;
        const onlyNumbers = regex.test(numero);
        if (onlyNumbers) {
            alert("dni correcto compare");
        }else{
            alert("El formato del dni es incorrecto")
        }
        
    }else{
        alert("El dni no es correcto o la letra no es la adecuada o el formato del dni no es el adecuado")
    }
    

}

