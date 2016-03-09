var Datos = {
	labels : ["", "","", ],
	datasets : {
	{ //primer conjunto de colores

		fillColor     : "rgba(220,220,220,0.5)",
		strokeColor   : "rgba(220,220,220, 0.8)",
		highlighFill  : "rgba(220,220,220,0.75)",
		highlighStroke: "rgba(220,220,220,1)",
		data          : [10, 20, 30, 40, 50]

	},
	{//segundo conjunto de datos
	    fillColor     : "rgba(151,187,205,0.5)",
		strokeColor   : "rgba(151,187,205, 0.8)",
		highlighFill  : "rgba(151,187,205,0.75)",
		highlighStroke: "rgba(151,187,205,1)",
		data          : [15, 18, 20, 11, 24]	

	}

	}

}
var contexto = document.getElementById("canvas").getContext("2d");
window.Barra = new Chart(contexto).Bar(Datos,(responsive : true));