<?php
class koneksi
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "acara13";
    protected $koneksi;
    public function __construct()
    {
        try {
            $this->koneksi = new PDO("mysql:host->host; dbname-$this->user, $this->pass");
            $this->koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->koneksi;
    }
}
