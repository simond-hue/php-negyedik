<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<?php

$progi = new eldontes();
$progi->set_szam(rand(-10,10));
$progi->cmd_elojel();
echo "A generált számom: " . $progi->get_szam() . "<br />";
echo "Az előjel: " . $progi->get_elojel(). "<br />";

?>
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

?>

<!--
#####################################################################
Írd át az alábbi programokat OOP-ra:

	/* számláló */
	for($i=0;$i<5;$i++){
		echo $i . " ";
	}
	
	/* hátultesztelős */
	$i=0; 
	do {
		echo $i . " "; 
		$i++;
	} while($i<5);
	
	/* előltesztelős */
	$i=0;
	while ($i<5) {
		echo $i . " "; 
		$i++;
	}
	
	echo "<table style='border: 1px solid red;'>";
	for($i=0;$i<5;$i++){
		echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo "asd";
			echo "</td>";			
		echo "</tr>";
	}
	echo "</table>";
	
			$eletkor = rand(1,140);
		//echo "<h3>Az életkor: ".$eletkor."</h3>";
		//echo "<h3>Az életkor: $eletkor</h3>";
		
		// változat 1.:

			if ($eletkor >= 18)
				echo "<p>Dohányozhatsz ($eletkor)!</p>";
			if ($eletkor < 18)
				echo "<p>Nem dohányozhatsz ($eletkor)!</p>";
			
		// változat 2.:

			if ($eletkor >= 18) 
			{
				echo "<p>Dohányozhatsz ($eletkor)!</p>";
			}
			if ($eletkor < 18) 
			{
				echo "<p>Nem dohányozhatsz ($eletkor)!</p>";
			}
		
		// változat 3.:
			if ($eletkor >= 18) 
				echo "<p>Dohányozhatsz ($eletkor)!</p>";
			else
				echo "<p>Nem dohányozhatsz ($eletkor)!</p>";

		// változat 4.:
			if ($eletkor >= 18) {
				echo "<p>Dohányozhatsz ($eletkor)!</p>";
			} else {
				echo "<p>Nem dohányozhatsz ($eletkor)!</p>";
			}
		
		// változat 4.:
		
			if ($eletkor >= 18) {
				echo "<p>Dohányozhatsz ($eletkor)!</p>";
			} elseif ($eletkor < 18) {
				echo "<p>Nem dohányozhatsz ($eletkor)!</p>";
			} else {
				echo "<p>Hiba történt!</p>";
			}
		
		// változat 5.:
			echo ($eletkor>=18)?"Dohányozhatsz":"Nem dohányozhatsz";

		// változat 6.:
			if ($eletkor <= 0) {
				echo "<p>Rossz adat!</p>";
			} elseif ($eletkor>=1 && $eletkor<18) {
				echo "<p>Nem dohányozhatsz ($eletkor)!</p>";
			} elseif ($eletkor>=18 && $eletkor<140) {
				echo "<p>Dohányohatsz!</p>";
			} else {
				echo "<p>Rossz adat!</p>";
			}
			
		// változat 7.:
			switch (rand(-6,6)){
				case -5:
				case -4:
				case -3:
				case -2:
				case -1: echo "Negatív!"; break;
				case 0: echo "Nulla!"; break;
				case 1:
				case 2:
				case 3:
				case 4:
				case 5: echo "Pozitív!"; break;
				default: echo "Rossz adat!"; break;
			}
#####################################################################
ÖNÁLLÓ FELADATOK

Gyakorló feladatok (elágazások)

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

	Készíts alkalmazás, amely egy dolgozat pontszáma alapján
	szövegesen és százalékosan ad értékelést!
	A pontszám 1 és 100 között lehetséges!
		Elégtelen: 0-tól 50 pontig,
		elégséges 65 pontig,
		közepes 75 pontig,
		jó 85 pontig,
		jeles 85 pont felett 100-ig.
	
	A program futásának eredménye hasonló módon jelenjen meg:
	
		100/76 pont, az elért eredmény osztályzata: jó!
		
4. feladat:

	Készítsünk programot, amely generál egy véletlen számot, vagyis a víz hőmérsékletét, majd eldönti, hogy az milyen halmazállapotú.
	A halmazállapotokat a google segítségével keresd meg!
	A halmazállapot lehet folyékony, gőz, vagy jég.

	Előltesztelős ciklusokra

		1. feladat:
			Írasd ki a számokat egymás alá,
			1 és 10 között
			(minta:
				1
				2
				3
				...)
				
		2. feladat:
			Írasd ki a számokat egymás mellé
			vesszővel tagolva,
			10 és 20 között
			(minta: 10, 11, 12, 
				...)
			
		3. feladat:
			Írasd ki a számokat egymás alá,
			paragrafusok közé,
			50-től visszafelé 40-ig
			(minta: <p>50</p><p>49</p><p>48/p>
				...)
			
		4. feladat:
			Írasd ki a számokat 1 és 50 között,
			a számok legyenek feketék,
			ha osztható 3-mal, akkor legyen piros
			(minta:
				<span style='color: black;'>1</span>,
				<span style='color: black;'>2</span>,
				<span style='color: red;'>3</span>,
				<span style='color: black;'>4</span>
				...)
				
	Hátultesztelős ciklusokra
		1. feladat:
			Írasd ki a számokat egy felsorolásban,
			1 és 20 között
			(segítség: w3schools>unordered list)
			
		2. feladat:
			Írasd ki a számokat egymás mellé,
			50 és 100 között,
			csak a párosakat,
			vesszővel tagolva
			
		3. feladat:
			Írasd ki a számokat 1 és 100 között,
			egy táblázatban,
			minden 10 kiírt szám után új sort kezdj
			(table, tr, td, ...)
			
	Számlálós ciklus
		1. feladat:
			Írasd ki a számokat 1 és 50 között,
			egymás mellé,
			vesszővel tagolva
			
		2. feladat:
			Írasd ki 1 és 100 között a számokat,
			az alábbi szabályt alkalmazva:
				csak egyszerre a 3-mal, 5-tel oszthatóakat,
			sorszámozott listában
		
		3. feladat:
			Írasd ki az angol ABC összes betűjét,
			a kiírásban felsorolást használj	
			
		1. feladat:
			g: 1-100
			ki: nagyobb, mint 50
				vagy
				kisebb, mint 50
				vagy
				pontosan 50
				
		2. feladat:
			g: 0-140
			google>wikipédia>életkori szakaszok
			ki:
				1-12: gyerek
				13-18: kamasz
				
		3. feladat:
			g: 1-10
			ki: páros, páratlan
			
		4. feladat:
			g: -5000-100000
			ki:
				-5000- -1: csóró vagy
				0: csóró vagy
				1-5000 kisgempa
				5001-10000: nagygempa
				10001-100000: zsíros zsebbélelő zseton
				
		5. feladat:
			g: 1-10
			ki: hétfő, kedd, ... rossz adat
			
		6. feladat:
			g: 1-400
			ki: négyzet kerület, terület
			
		7. feladat:
			g: téglatest oldalai, 0-100
			ki: felszín, térfogat
			ellenőrzés: 0 nulla esetén ne számolja ki: hibás adat
			
		8. feladat:
			SWITCH
			g: 0-15
			ki:
				hónapok nevei
				rossz adat esetén figyelmeztetés
				
		9. feladat:
			átváltó program (HuF->Euró)
			g: 0-100000
			ki: mennyi euró
			
		10. feladat:
			átváltó program (HuF->Euró, Euró->HuF)
			g: 0-100000
			ki: mennyi euróm mennyi forint?!

		11. feladat:
			Írj saját példát: if szerkezetre
		12. feladat:
			Írj saját példát: (feltétel)?1:2 szerkezetre
		13. feladat:
			Írj saját példát: if else szerkezetre
		14. feladat:
			Írj saját példát: if elseif else szerkezetre
		15. feladat:
			Írj saját példát: switch szerkezetre
					
-->