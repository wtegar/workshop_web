<?php
interface hitungLuas
{
  public function hitungLuas();
}


class persegi implements hitungLuas
{
  private $panjang;
  private $lebar;

  public function __construct($panjang, $lebar)
  {
    $this->panjang = $panjang;
    $this->lebar = $lebar;
  }

  public function hitungLuas()
  {
    return $this->panjang * $this->lebar;
  }
}

class segitiga implements hitungLuas
{
  private $alas;
  private $tinggi;

  public function __construct($alas, $tinggi)
  {
    $this->alas = $alas;
    $this->tinggi = $tinggi;
  }

  function hitungLuas()
  {
    return  $this->alas * $this->tinggi * (1 / 2);
  }
}

class lingkaran implements hitungLuas
{
  private $jari;

  public function __construct($jari)
  {
    $this->jari = $jari;
  }

  function hitungLuas()
  {
    return $this->jari * $this->jari * pi();
  }
}

$luasPersegi = new persegi(2, 3);
$luasSegitiga = new segitiga(3, 4);
$luasLingkaran = new lingkaran(7);

echo "Luas persegi = " . $luasPersegi->hitungLuas() . "<br>";
echo "Luas segitga = " . $luasSegitiga->hitungLuas() . "<br>";
echo "Luas lingkaran = " . $luasLingkaran->hitungLuas() . "<br>";