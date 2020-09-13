<?php 

	class Animal {
		public $pussy, $inu, $buwung, $odette;

		public function terbang() {
			if($this->jumlah_kaki == 2) {
				echo "Bisa Terbang";
			} else {
				echo "Tidak Bisa Terbang";
			}
		}
	}
	class Kucing extends Animal {
		public function bersuara(){
			return "stardenburdenhardenbart";
		}
	}

	class Anjing extends Animal {
		public function bersuara(){
			return "bark bark";
		}
	}

	class Elang extends Animal {
		public function bersuara(){
			return "kwaaaaaaakkkkkkkkkk";
		}
	}

	class Angsa extends Animal {
		public function bersuara(){
			return "hmmmm hmmmm";
		}
	}

	$pussy = new Kucing;
	$pussy->jumlah_kaki = 4;
	echo "Pussy Adalah Kucing <br>";
	echo "Jumlah Kakinya Adalah ".$pussy->jumlah_kaki."<br>";
	echo $pussy->terbang()."<br>";
	echo "Suaranya Adalah ".$pussy->bersuara()."<br>";
	echo "<hr>";

	$inu = new Anjing;
	$inu->jumlah_kaki = 4;
	echo "inu Adalah Anjing <br>";
	echo "Jumlah Kakinya Adalah ".$inu->jumlah_kaki."<br>";
	echo $inu->terbang()."<br>";
	echo "Suaranya Adalah ".$inu->bersuara()."<br>";
	echo "<hr>";

	$buwung = new Elang;
	$buwung->jumlah_kaki = 2;
	echo "buwung Adalah Elang <br>";
	echo "Jumlah Kakinya Adalah ".$buwung->jumlah_kaki."<br>";
	echo $buwung->terbang()."<br>";
	echo "Suaranya Adalah ".$buwung->bersuara()."<br>";
	echo "<hr>";

	$odette = new Angsa;
	$odette->jumlah_kaki = 2;
	echo "odette Adalah Angsa <br>";
	echo "Jumlah Kakinya Adalah ".$odette->jumlah_kaki."<br>";
	echo $odette->terbang()."<br>";
	echo "Suaranya Adalah ".$odette->bersuara()."<br>";
	echo "<hr>";
?> 