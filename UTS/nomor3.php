<html>
	<form action="nomor3.php" method="get" name="kalkulator">
		<pre>
			Nilai A adalah	: <input type="text" name="A"><br>
			Nilai B adalah	: <input type="text" name="B"><br>
			Operasi			: <input type="radio" name="tambah" value="1">Tambah (+)<br>
						  <input type="radio" name="kurang" value="2">Kurang (-)<br>
						  <input type="radio" name="kali" value="3">Kali (x)<br>
						  <input type="radio" name="bagi" value="4">Bagi (:)<br>
					<input type="submit" name="submit" value="Hitung">
		</pre>
	</form>
	<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$a = $_GET["A"];
	$b = $_GET["B"];
	$tambah = $_GET["tambah"];
	$kurang = $_GET["kurang"];
	$kali   = $_GET["kali"];
	$bagi   = $_GET["bagi"];
	$hitung = $_GET["submit"];

	if ($hitung) {
		if($tambah){
			$tambahan = $a+$b;
			echo "Nilai A adalah $a<br>
				  Nilai B adalah $b<br>
				  Jadi Nilai A ditambah Nilai B adalah $tambahan";
		}
		elseif ($kurang) {
			$kurangi = $a-$b;
			echo "Nilai A adalah $a<br>
				  Nilai B adalah $b<br>
				  Jadi Nilai A ditambah Nilai B adalah $kurangi";
		}
		elseif ($kali) {
			$kalian = $a*$b;
			echo "Nilai A adalah $a<br>
				  Nilai B adalah $b<br>
				  Jadi Nilai A ditambah Nilai B adalah $kalian";
		}
		elseif ($bagi) {
			$bagian = $a/$b;
			echo "Nilai A adalah $a<br>
				  Nilai B adalah $b<br>
				  Jadi Nilai A ditambah Nilai B adalah $bagian";
		}
		else{
			echo "Pilih dulu operasinya";
		}
	}
	?>
</html>