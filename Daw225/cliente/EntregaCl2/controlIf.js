let mensaje = "Introduce tu nombre";
let nombre = prompt(mensaje);
let mensaje2 = "Introduce edad";
let edad = prompt(mensaje2);


if (edad<12) {
    var dato=niño;
    alert(`${mesnaje} tiene ${edad} años con lo cual es un ${dato} `);
}else if (edad<13 && edad<17) {
    var dato=adolescente;
    alert(`${mesnaje} tiene ${edad} años con lo cual es un ${dato} `);
    
}else if (edad<18 && edad<64) {
    var dato=trabajador;
    alert(`${mesnaje} tiene ${edad} años con lo cual es un ${dato} `);
    
}else if (edad<65 ) {
    var dato=jubilado;
    alert(`${mesnaje} tiene ${edad} años con lo cual es un ${dato} `);
    
}
