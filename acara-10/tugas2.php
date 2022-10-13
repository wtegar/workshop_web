<?php 
	
	class Item
	{
		private $item;
		public function Ukuran($item)
		{
			$Ukuran = $this -> item = $item;
			return "Ukuran : ".$Ukuran."<br>";
		}
		public function Warna($item)
		{
			$Warna = $this -> item = $item;
			return "Warna : ".$Warna."<br>";
		}
		public function Nama($item)
		{
			$Nama = $this -> item = $item;
			return "Nama : ".$Nama."<br>";
		}
	}

class Topi extends item
{
    private $model='Topi Gunung';
    public function modelTopi()
    {
        $model= $this -> model;
        return "Model : ".$model."<br>";
    }
}

class Celana extends item
{
    private $tipe='Panjang';
    private $model='Pencils';
    public function tipeCelana()
    {
        $tipe= $this -> tipe;
        return "Tipe : ".$tipe."<br>";
    }
    public function modelCelana()
    {
        $model= $this -> model;
        return "Model : ".$model."<br>";
    }
}

class Baju extends item
{
    private $tipe="Batik";
    public function tipeBaju()
    {
        $tipe= $this -> tipe;
        return "Tipe : ".$tipe."<br>";
    }
}

$Topi = new Topi();
$Celana = new Celana();
$Baju = new Baju();

$modelTopi = $Topi-> modelTopi();
$namaTopi = $Topi-> Nama('Cardinal');
$WarnaTopi = $Topi-> Warna('Hitam');
$UkuranTopi = $Topi-> Ukuran('L');

$modelCelana = $Celana-> modelCelana();
$tipeCelana = $Celana-> tipeCelana();
$namaCelana = $Celana-> Nama('Lotto');
$WarnaCelana = $Celana-> Warna('Hitam');
$UkuranCelana = $Celana-> Ukuran('L');

$tipeBaju = $Baju-> tipeBaju();
$namaBaju = $Baju-> Nama('Cendana');
$WarnaBaju = $Baju-> Warna('Maroon');
$UkuranBaju = $Baju-> Ukuran('L');

echo "<h2>Produk Topi</h2>";
echo $modelTopi;
echo $namaTopi;
echo $WarnaTopi;
echo $UkuranTopi;

echo "<h2>Produk Celana</h2>";
echo $modelCelana;
echo $tipeCelana;
echo $namaCelana;
echo $WarnaCelana;
echo $UkuranCelana;

echo "<h2>Produk Baju</h2>";
echo $tipeBaju;
echo $namaBaju;
echo $WarnaBaju;
echo $UkuranBaju;
?>