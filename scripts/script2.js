var orign = document.getElementById("origen").value;
var destiny = document.getElementById("destino").value;
var startDate = document.getElementById("fecha_ida").value;
var finishDate = document.getElementById("fecha_vuelta").value;
var rooms = document.getElementById("habitaciones").value;
var persons = document.getElementById("personas").value;
var textarea = document.getElementById("text_area_search_section");
var button = document.getElementsByClassName("search_button");


class peticion {
    constructor(origen, destino, fecha_ida, fecha_vuelta, habitaciones, personas) {
        this.origen = origen;
        this.destino = destino;
        this.fecha_ida = fecha_ida;
        this.fecha_vuelta = fecha_vuelta;
        this.habitaciones = habitaciones;
        this.personas = personas
    }
}
var peticiones = new Array;
peticiones.push(new peticion(orign, destiny, startDate, finishDate, parseInt(rooms), parseInt(persons)));

function show() {
    peticiones.forEach(element => {
        textarea.value = element.origen + " " + element.destino + " " + element.fecha_ida + " " + element.fecha_vuelta + " " + element.habitaciones + " " + element.personas;
    });
}