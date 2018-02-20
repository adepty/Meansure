<?php

	require_once 'conexao.class.php'; 

	class calculo{
		private $qtda = 0;
		private $segmento;
		private $km;
		private $Dfwd;
		private $Dvbmedia = 0;

		public function getQtda(){
			return $this->qtda;
		}
		public function setQtda($qtda){
			if(!empty($qtda)) $this->qtda=$qtda;
		}
		public function getSegmento(){
			return $this->segmento;
		}
		public function setSegmento($segmento){
			if(!empty($segmento)) $this->segmento=$segmento;
		}
		public function getKM(){
			return $this->km;
		}
		public function setKM($km){
			if(!empty($km)) $this->km=$km;
		}
		public function getDfwd(){
			return $this->Dfwd;
		}
		public function setDfwd($Dfwd){
			if(!empty($Dfwd)) $this->Dfwd=$Dfwd;
		}

		public function HomogeneoDVB($Dfwd){

			$Dfwd = $this->Dfwd;
			$Dvb = 0;

		 for($i = 0 ; $i <= $this->qtda ; $i++){	

			if($Dfwd <= 25){
				
				$Dvb = $Dfwd;
				return $Dvb;

			}else if($Dfwd >= 85){

				$Dvb = 8.964*(pow(($Dfwd-60),0.715));

			}else{

				$Dvb = 20.645*(pow(($Dfwd-19),0.351));

			}

			return number_format($Dvb,2);

			//$Dvbmedia = $Dvb + $Dvbmedia;

			}

			//$this->Dvbmedia = $Dvbmedia;
		}

		public function DVBtotal($calculo){

			$total = 0;

			$total = $calculo + $total;

			return $total;

		}

		public function DMedia_VB($qtda,$Dvbtotal){

			$Media = 0;			

			$Media = $Dvbtotal / $qtda;

			return $Media;
		}

		public function PRO11(){

		}

	}

?>