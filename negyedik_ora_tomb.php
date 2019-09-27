<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<style>
	*{
		background-color: #222222;
		color: #f22ce2;
		font-size: 175%;
		font-family: "Comic Sans MS", cursive, sans-serif;
	}
</style>
<body>

<?php
/*
$api = new tombos();
$api->feltoltes();
$api->kiiratas();
echo "<p>A tömb elemeinek összege: " . $api->function_megszamol() . "<br />";
*/
//0. feladat
/*
$tomb = new Tomb();
$tomb->setTomb(1,10,10);
$tomb->EchoTomb();
*/
//1. feladat
/*
$tombMasodik = new Tomb();
$tombMasodik->setTomb(1,100,5);
echo $tombMasodik->Elemszam() . "";
*/
//2. feladat
$tombHarmadik = new Tomb();
$tombHarmadik->setTomb(1,200,100);
echo "A tömb elemeinek a száma: " . $tombHarmadik->Elemszam() . "<br>";
echo "A legkisebb elem: " . $tombHarmadik->LegkisebbElem() . "<br>";
echo "Sorszámok: " . $tombHarmadik->LegkisebbElemSorszam() . "<br>";
echo "A legnagyobb elem: " . $tombHarmadik->LegnagyobbElem() . "<br>";
echo "Sorszámok: " . $tombHarmadik->LegnagyobbElemSorszam() . "<br>";
echo "A számok átlaga: " . $tombHarmadik->AVG() . "<br>";
echo "Páros számok száma: " . $tombHarmadik->ParosokSzama() . "<br>";
echo "Páratlanok száma: " . $tombHarmadik->ParatlanokSzama() . " Összegük: " . $tombHarmadik->SumOfParatlanok() . "<br>";
echo "Hárommal és öttel oszthatóak száma: " . $tombHarmadik->HaromOt() . "<br>";
$szam = rand(1,200);
echo $tombHarmadik->Contains($szam);
/*
$tombHarmadik->SortMan();
$tombHarmadik->EchoTomb();
*/

?>

</body>
</html>
<?php
class tombos{
	public $tomb;
	public $sum  = 0;
	public function feltoltes(){
		for($i=0;$i<10;$i++){
			$this->tomb[$i]=rand(-10,10);
		}
	}
	public function kiiratas(){
		for($i=0;$i<10;$i++){
			echo $this->tomb[$i] . ", ";
		}		
	}
	
	public function function_megszamol(){
		$this->sum = array_sum($this->tomb);		
		return $this->sum;
	}
}

class Tomb{
	//0. feladat

	private $tomb;

	public function getTomb(){
		return $this->tomb;
	}
	public function setTomb($min, $max, $count){
		for($i = 0; $i < $count; $i++){
			$this->tomb[$i] = rand($min,$max);
		}
	}

	public function EchoTomb(){
		for($i = 0; $i < count($this->tomb); $i++){
			echo $this->tomb[$i] . " ";
		}
	}

	//1. feladat
	public function Elemszam(){
		return count($this->tomb);
	}

	//2. feladat
	public function LegkisebbElem(){
		$min = $this->tomb[0];
		for($i = 1; $i < count($this->tomb); $i++){
			if($this->tomb[$i] < $min){
				$min = $this->tomb[$i];
			}
		}
		return $min;
	}

	public function LegkisebbElemSorszam(){
		$min = $this->LegkisebbElem();
		$s = "";
		for($i = 0; $i < count($this->tomb); $i++){
			if($this->tomb[$i] == $min){
				$s .= $i . " ";
			}
		}
		return $s;
	}

	public function LegnagyobbElem(){
		$max = $this->tomb[0];
		for($i = 1; $i < count($this->tomb); $i++){
			if($this->tomb[$i] > $max){
				$max = $this->tomb[$i];
			}
		}
		return $max;
	}

	public function LegnagyobbElemSorszam(){
		$max = $this->LegnagyobbElem();
		$s = "";
		for($i = 0; $i < count($this->tomb); $i++){
			if($this->tomb[$i] == $max){
				$s .= $i . " ";
			}
		}
		return $s;
	}

	public function AVG(){
		return array_sum($this->tomb) / count($this->tomb);
	}

	public function ParosokSzama(){
		$db = 0;
		for($i = 0; $i < count($this->tomb); $i++){
			if($this->tomb[$i] % 2 == 0){
				$db++;
			}
		}
		return $db;
	}

	public function ParatlanokSzama(){
		$db = 0;
		for($i = 0; $i < count($this->tomb); $i++){
			if($this->tomb[$i] % 2 == 1){
				$db++;
			}
		}
		return $db;
	}

	public function SumOfParatlanok(){
		$sum = 0;
		for($i = 0; $i < count($this->tomb); $i++){
			if($this->tomb[$i] % 2 == 1){
				$sum+=$this->tomb[$i];
			}
		}
		return $sum;
	}

	public function HaromOt(){
		$db = 0;
		for($i = 0; $i < count($this->tomb); $i++){
			if($this->tomb[$i] % 3 == 0 and $this->tomb[$i] % 5 == 0){
				$db++;
			}
		}
		return $db;
	}

	public function Contains($value){
		if(in_array($value, $this->tomb)){
			echo "A szám benne van a tömbben." . "<br>";
			echo "A szám: " . $value . "<br>";
			$db = 0;
			for($i = 0; $i < count($this->tomb); $i++){
				if($this->tomb[$i] == $value){
					$db++;
				}
			}
			if($db > 1){
				echo "A szám " . $db . "x szerepel a tömbben<br>";
			}
		}
		else{
			echo "A szám nincs benne a tömbben." . "<br>";
		}
	}

	public function SortMan(){
		for ($i=0; $i < count($this->tomb); $i++) { 
			$ind = $i;
			for ($j=$ind; $j < count($this->tomb) ; $j++) { 
				if($this->tomb[$j] < $this->tomb[$ind]){
					$ind = $j;
				}
			}
			if($ind != $i){
				$csere = $this->tomb[$ind];
				$this->tomb[$ind] = $this->tomb[$i];
				$this->tomb[$i] = $csere; 
			}
		}
	}

}

/*

Feladatok tömbökre:

0. feladat:
	
	Tölts fel egy 10 elemű tömböt 1 és 10 közötti számokkal!
	Írasd ki!
	

1. feladat:
	
	Tölts fel egy 5 elemű tömböt 1 és 100 közötti számokkal!
	Írasd ki a tömb elemeinek számát!
	Írasd ki!
	
2. feladat:
	
	Tölts fel egy 100 elemű tömböt 1 és 200 közötti számokkal!
	Írasd ki a tömb elemeinek számát!
	a. Írasd ki a tömb elemeinek összegét!
	b1. A legkisebb elemet! 
	b2. A legkisebb elemet! Sorszámokat is!
	c1. A legnagyobb elemet!
	c2. A legnagyobb elemet! Sorszámokat is!
	d. A tömb elemeinek átlagát!
	e. Számoljuk meg a páros elemek számát!
	f. Számoljuk meg a páratlan elemek számát és azok összegért írassuk ki!
	g. Számoljuk meg a hárommal és öttel osztható elemek darabszámát!
	h. 1 és 200 között generálj egy számot,
	   Írasd ki, hogy a tömbben van-e ilyen szám! (Igen/nem)
	i. 1 és 200 között generálj egy számot,
	   Ha van ilyen, akkor írasd is ki azt!
	   
	i. 1 és 200 között generálj egy számot,
	   Ha van ilyen, akkor írasd is ki!
	   Ha van több ilyen, akkor számoltasd meg!
	
	x. Rendezd az elemeket növekvő sorrendbe! (Manuális programozás)
	y. Rendezd az elemeket csökkenő sorrendbe! (Fgv segítségével)
	
*/
?>