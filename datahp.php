<?php
	class data{
	public $merk;
	public $tahun_peluncuran;
	public $memori_internal;
	public $ram;
	public $kamera;
	public $baterai;

		public function __construct($merk,$tahun_peluncuran,$memori_internal,$ram,$kamera,$baterai)
	{
	$this -> merk = $merk;
	$this -> tahun_peluncuran = $tahun_peluncuran;
	$this -> memori_internal = $memori_internal;
	$this -> ram = $ram;
	$this -> kamera = $kamera;
	$this -> baterai = $baterai;	
	}
	public function get_merk()
	{
		return $this -> merk;
	}
	public function get_tahunpeluncuran()
	{
		return $this -> tahun_peluncuran;
	}
	public function get_memoriinternal()
	{
		return $this -> memori_internal;
	}
	public function get_ram()
	{
		return $this -> ram;
	}
	public function get_kamera()
	{
		return $this -> kamera;
	}
	public function get_baterai()
	{
		return $this -> baterai;
	}
	}
?>