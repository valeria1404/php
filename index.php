<?php 
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("grafica",$conexion);
	
	$meses = array('','Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sept','Oct','Nov','Dic');
	for($x=1;$x<=12;$x=$x+1){
		$dinero[$x]=0;		
	}
	
	$anno=date('Y');
	$cont = 0;
	$cant = 40;


	
	$sql=mysql_query("SELECT * FROM valores");
	

	while($curr = mysql_fetch_assoc($sql)){


		$dinero[$cont] = $curr['valor'];
		$cont = $cont +1;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Valores'],
		  <?php
		  	for($x=1;$x<=12;$x=$x+1){	
		  ?>
          ['<?php echo $meses[$x]; ?>',  <?php echo $dinero[$x] ?>],
		  <?php } ?>
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Grafica Reporte de Ingresos Anual', titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<title>Prueba</title>
</head>

<body>
	<div id="chart_div" style="width: 98%; height: 500px;"></div>
</body>
</html>