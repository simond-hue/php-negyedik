<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<style>
	*{
		background-color: #222222;
		color: #DDDDDD;
		font-size: 24pt;
		font-family: "Comic Sans MS", cursive, sans-serif;
	}
</style>
<body>

<?php
/*
$progi = new eldontes();
$progi->set_szam(rand(-10,10));
$progi->cmd_elojel();
echo "A generált számom: " . $progi->get_szam() . "<br />";
echo "Az előjel: " . $progi->get_elojel(). "<br />";
*/


//1. feladat
/*
$elso = new Elso();
$elso->setSzam1(rand(-10,10));
$elso->setSzam2(rand(-10,10));
$elso->Nagyobb();
*/
//2. feladat
/*
$masodik = new Masodik();
$masodik->setSzam1(rand(1,1000));
$masodik->setSzam2(rand(1,1000));
$masodik->NagyobbMasodik();
*/
//3. feladat
/*
$harmadik = new Harmadik();
$harmadik->setPontszam(rand(0,100));
$harmadik->Ertekeles();
?>
*/
</body>
</html>                                                                                      
<?php

class eldontes{
	private $szam = 0;
		public function set_szam($ertek){
			$this->szam = $ertek;
		}
		public function get_szam(){
			return $this->szam;
		}
	private $elojel = 0;
		public function set_elojel($ertek){
			$this->elojel = $ertek;
		}
		public function get_elojel(){
			return $this->elojel;
		}	

	public function cmd_elojel(){
		if (self::get_szam()>0) self::set_elojel("+");
		if (self::get_szam()<0) self::set_elojel("-");
		if (self::get_szam()==0) self::set_elojel("0");
	}
}

class Elso{
	private $szam1;
	private $szam2;

	public function getSzam1(){ return $this->szam1; }
	public function getSzam2(){ return $this->szam2; }

	public function setSzam1($szam1){ $this->szam1 = $szam1; }
	public function setSzam2($szam2){ $this->szam2 = $szam2; }

	public function Nagyobb(){
		if($this->szam1 > $this->szam2){
			echo $this->szam1 . " nagyobb, mint " . $this->szam2;
		}
		else if($this->szam2 > $this->szam1){
			echo $this->szam2 . " nagyobb, mint " . $this->szam1;	
		}
		else{
			echo $this->szam1 . " és " . $this->szam2 . " egyenlő";
		}
	}
}

class Masodik{
	private $szam1;
	private $szam2;

	public function getSzam1(){ return $this->szam1; }
	public function getSzam2(){ return $this->szam2; }

	public function setSzam1($szam1){ $this->szam1 = $szam1; }
	public function setSzam2($szam2){ $this->szam2 = $szam2; }

	public function NagyobbMasodik(){
		if($this->szam1 > $this->szam2){
			echo $this->szam1 . " nagyobb, mint " . $this->szam2;
		}
		else if($this->szam2 > $this->szam1){
			echo $this->szam2 . " nagyobb, mint " . $this->szam1;	
		}
		else{
			echo $this->szam1 . " és " . $this->szam2 . " egyenlő";
		}
	}
}

class Harmadik{
	private $pontszam;

	public function getPontszam(){ return $this->pontszam; }
	public function setPontszam($pontszam) { $this->pontszam = $pontszam; }

	public function Ertekeles(){
		switch($this->pontszam){
			case ($this->pontszam >= 0 and $this->pontszam < 50):
				echo "Elégtelen (".$this->pontszam."%)";
				break;
			case ($this->pontszam >= 50 and $this->pontszam < 65):
				echo "Elégséges (".$this->pontszam."%)";
				break;
			case ($this->pontszam >= 65 and $this->pontszam < 75):
				echo "Közepes (".$this->pontszam."%)";
				break;
			case ($this->pontszam >= 75 and $this->pontszam < 85):
				echo "Jó (".$this->pontszam."%)";
				break;
			case ($this->pontszam >= 85 and $this->pontszam <=100):
				echo "Kiváló (".$this->pontszam."%)";
				break;
			default:
				echo "Rossz érték!";
				break;	
		}
	}
}

?>

<!--
#####################################################################
Írd át az alábbi programokat OOP-ra:

1. feladat:

	Generálj egy véletlen számot -10 és +10 között!
	Írasd ki melyik a nagyobb!
	Írasd ki egy külön bekezdésben azt is, hogy melyik a nagyobb!
	Minta az alkalmazás kimenetére:
	
		5 nagyobb, mint -5.

2. feladat:

	Generálj két véletlen számot 1 és 1000 között, 
	és írja ki a köztük lévő relációt szöveges formában!
	Minta az alkalmazás kimenetére:
	
		23 nagyobb, mint 443,
		777 egyenlő 777,
		stb...
	
3. feladat:

	Készíts alkalmazást, amely egy dolgozat pontszáma alapján
	szövegesen és százalékosan ad értékelést!
	A pontszám 1 és 100 között lehetséges!
		Elégtelen: 0-tól 50 pontig,
		elégséges 65 pontig,
		közepes 75 pontig,
		jó 85 pontig,
		jeles 85 pont felett 100-ig.
	
	A program futásának eredménye hasonló módon jelenjen meg:
	
		100/76 pont, az elért eredmény osztályzata: jó!
		