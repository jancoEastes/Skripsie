<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="TempGauge.css">
	<title>SmartGeyser - Homepage</title>
	<h1>Helo</h1>

</head>

	<body style="background-color:grey;">
		<?php
			include("TempValues.php");
		?>
		<a href="Thermostat1.html">Thermostat</a>
		<div class="TempGauge">
			<div class="TempGauge__body">
				<div class ="TempGauge__fill"></div>
				<div class="TempGauge__cover"></div>
			</div>
		</div>
		<script>
			const gaugeElement = document.querySelector(".TempGauge");
			
			function setGaugeValue(gauge, value) {
				if (value < 0 || value > 100) {
					return;
				}
			 if(value < 33){
				gauge.querySelector(".TempGauge__fill").style.background = `linear-gradient(darkblue, blue)`;
			}if(value >= 33 && value < 66){
				gauge.querySelector(".TempGauge__fill").style.background = `linear-gradient(to bottom right, green, blue)`;
			}if(value >= 66){
				gauge.querySelector(".TempGauge__fill").style.background = `linear-gradient(to bottom right,darkred, green, blue)`;
			}
			gauge.querySelector(".TempGauge__fill").style.transform = `rotate(${value / 200}turn)`;
			gauge.querySelector(".TempGauge__cover").textContent = `${value}°C`;
			}
			var tempExtract = <?php echo json_encode($tempValues);?>;
			setGaugeValue(gaugeElement, tempExtract[1]);
			
		</script>

	</body>	
</html>