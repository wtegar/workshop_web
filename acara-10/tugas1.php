<?php
	class mobilLengkap {
		public $hidup = 'TV dihidupkan';
		public $cari = 'TV mencari channel';
		public $tampil = 'TV menampilkan gambar';
	}

	class mobilBMW extends mobilLengkap {

		function nontonTV()
		{
			return $this -> hidup . ', ' . $this -> cari . ', ' . $this -> tampil;
		}
	}

	class mobilBMWberaksi {
		public function nontonTV()
		{
			return 'Output dari class mobilBMWberaksi method nontonTV';
		}
		public function hidupkanMobil()
		{
			return 'Output dari class mobilBMWberaksi method hidupkanMobil';
		}
		public function matikanMobil()
		{
			return 'Output dari class mobilBMWberaksi method matikanMobil';
		}
		public function ubahGigi()
		{
			return 'Output dari class mobilBMWberaksi method ubahGigi';
		}
	}

	$tv = new mobilBMW;
	$mobil = new mobilBMWberaksi;

	echo $tv -> nontonTV();
	echo '<br /><hr />';
	echo $mobil -> nontonTV();
	echo '<br /><hr />';
	echo $mobil -> hidupkanMobil();
	echo '<br /><hr />';
	echo $mobil -> matikanMobil();
	echo '<br /><hr />';
	echo $mobil -> ubahGigi();
	echo '<br /><hr />';
?>