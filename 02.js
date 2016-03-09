var Datos = {

	value   : 100,
	color   : "#F7464A",
	highligh: "#FF5A5E",
	label   : "Modelo A"
 },
 {
	value   : 100,
	color   : "#46BFBD",
	highligh: "#5AD3D3",
	label   : "Modelo B"
 },
 {
	value   : 100,
	color   : "#FDB45C",
	highligh: "#FFC870",
	label   : "Modelo c"
 }
}

var contexto = document.getElemntById("canvas").getContext("2d");
window.Donut = new Chart (contexto).Doughnut(Datos, (responsive : true));