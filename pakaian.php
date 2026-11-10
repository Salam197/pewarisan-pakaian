<?php

class Pakaian {
    public $merk;
    protected $bahan;
    private $hargaModal;

    public function __construct($merk, $bahan, $hargaModal) {
        $this->merk = $merk;
        $this->bahan = $bahan;
        $this->hargaModal = $hargaModal;
    }

    public function getHargaModal() {
        return $this->hargaModal;
    }

    public function infoPakaian() {
        return "Merk: " . $this->merk . ", Bahan: " . $this->bahan . ", Harga Modal: " . $this->hargaModal;
    }
}

class Jacket extends Pakaian {
    public $tipeResleting;

    public function __construct($merk, $bahan, $hargaModal, $tipeResleting) {
        parent::__construct($merk, $bahan, $hargaModal);
        $this->tipeResleting = $tipeResleting;
    }

    public function infoJacket() {
        return $this->infoPakaian() . ", Tipe Resleting: " . $this->tipeResleting;
    }
}

class TShirt extends Pakaian {
    public $ukuran;

    public function __construct($merk, $bahan, $hargaModal, $ukuran) {
        parent::__construct($merk, $bahan, $hargaModal);
        $this->ukuran = $ukuran;
    }

    public function infoTShirt() {
        return "T-shirt ukuran $this->ukuran, " . $this->infoPakaian();
    }
}

class Pants extends Pakaian {
    public $jenisPotongan;

    public function __construct($merk, $bahan, $hargaModal, $jenisPotongan) {
        parent::__construct($merk, $bahan, $hargaModal);
        $this->jenisPotongan = $jenisPotongan;
    }

    public function infoPants() {
        return "Celana dengan potongan $this->jenisPotongan, " . $this->infoPakaian();
    }
}

$jaketBomber = new Jacket("Erigo", "Parasut", 175000, "YKK");
$kaosPolos = new TShirt("Uniqlo", "Cotton Combed 30s", 80000, "L");
$pleatedTrouser = new Pants("Zara", "Woll", 150000, "Slim Fit");

echo $jaketBomber->infoJacket();
echo $kaosPolos->infoTShirt();
echo $pleatedTrouser->infoPants();
?>