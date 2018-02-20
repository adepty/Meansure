	<?php
		$kmi = $_POST["v"];
		$kmf = $_POST["v1"];
		$dfwd = $_POST["cont2"];
		$i1 = $_POST["i1"];
		$i2 = $_POST["i2"];
		$nusace = 6579611.77762985;
		$desviopadrao = 0;

		#Calculos
		$extencao = $kmf - $kmi;

		/*como resolver a conta abixo, com isso da pra resolver todo o resto
		ao add um novo campo o name continua igual , necessario obter a media de dvbmedio
		$qtd esta indefinido e será escolha do usuario a quantoidade pra dividir o dvb*/

		#$dvbmedio = $dfwd/$qtd;

		#$desviopadrao = sqrt($dvb/*Não é apenas um $dvb, é igual o de media*/);
		#$dprojeto = $dvbmedio + $desviopadrao;
		#$dadm = pow(10, 3.148-0.188*log(nusace))

		#Dvb(10-²mm)
		if ($dfwd<=25) {
			$dvb = $dfwd;
		}
		elseif ($dfwd>=85) {
			$dvb = 8.964*(pow($dfwd-60, 0.715));
		}
		else{
			$dvb = 20.645*(pow($dfwd-19, 0.351));
		}

/*
		#Hef[cm]
		if (-5.737+807.961/$dprojeto+0.972*$i1+4.101*$i2<0) {
			$hef = 0;
		}
		else {
			$hef = -5.737+807.961/$dprojeto+0.972*$i1+4,101*$i2;
		}

		#Hr[cm]
		if (-19.015+238.14/(sqrt($dadm))-1.357*$hef+1.016*$i1+3.893*$i2<0){
			$hr = 0;
		}
		else {
			$hr = (-19.015+238.14/(sqrt($dadm))-1.357*$hef+1.016*$i1+3.893*$i2);
		}
	*/
		echo "Dvb ".number_format($dvb,1);
		echo "<br> extencao $extencao";
		#echo "<br> teste $dvbmedio";
		echo "<br> desviopadrao $desviopadrao";
		#echo "<br>$dprojeto";
		#echo "<br>$dadm";
		#echo "<br>$hef";
		#echo "<br>$hr";
?>
