<?php
abstract class Kendaraan
{
    abstract public function getInformasi();
}

class Motor extends Kendaraan
{
    public function getInformasi()
    {
        return "Informasi Motor";
    }
}
class Mobil extends Kendaraan
{
    public function getInformasi()
    {
        return "Informasi Mobil";
    }
}
class Sepeda extends Kendaraan
{
    public function getInformasi()
    {
        return "Informasi Sepeda";
    }
}

$motor = new Motor();
echo $motor->getInformasi();
echo "<br>";

$sepeda = new sepeda();
echo $sepeda->getInformasi();
echo "<br>";

$mobil = new Mobil();
echo $mobil->getInformasi();