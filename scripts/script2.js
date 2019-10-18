var orign;
var destiny;
var startDate;
var finishDate;
var rooms;
var persons;
var textarea = document.getElementById("text_area_search_section");
var button = document.getElementsByClassName("search_button");


function getValues(){
orign = document.getElementById('origen').value;
destiny= document.getElementById("destino").value;
startDate= document.getElementById("fecha_ida").value;
finishDate= document.getElementById("fecha_vuelta").value;
rooms = document.getElementById("habitaciones").value;
persons = document.getElementById("personas").value;
}


class peticion {
    constructor(origen, destino, fecha_ida, fecha_vuelta,habitaciones,personas) {
        this.origen = origen;
        this.destino = destino;
        this.fecha_ida = fecha_ida;
        this.fecha_vuelta = fecha_vuelta;   
        this.habitaciones = habitaciones;
        this.personas = personas
    }
}

function show() {
    getValues();
    var peticiones = new Array;
peticiones.push(new peticion(orign, destiny, startDate, finishDate, parseInt(rooms), parseInt(persons)));

    peticiones.forEach(element => {
        textarea.value = element.origen + " " + element.destino + " " + element.fecha_ida + " " + element.fecha_vuelta + " " + element.habitaciones + " " + element.personas;
    });
}