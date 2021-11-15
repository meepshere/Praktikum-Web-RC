<?php

    class Buah{
        var $nama;
        var $banyak;

        public function __construct($nama, $banyak){
            $this->nama = $nama;
            $this->banyak = $banyak;
        }

        public function getBanyak(){
            return $this->banyak;
        }
    }

    class Mangga extends Buah{
        var $harga;
        var $totalHarga;

        public function __construct($banyak){
            parent::__construct("Mangga", $banyak);
            $this->harga = 15000;
            $this->totalHarga = $this->harga * $banyak;
        }

        public function info(){
            echo "{$this->nama} - - {$this->banyak} - - {$this->harga} - - {$this->totalHarga}";
        }
    }

    class Jambu extends Buah{
        var $harga;
        var $totalHarga;

        public function __construct($banyak){
            parent::__construct("Jambu", $banyak);
            $this->harga = 13000;
            $this->totalHarga = $this->harga * $banyak;
        }

        public function info(){
            echo "{$this->nama} - - {$this->banyak} - - {$this->harga} - - {$this->totalHarga}";
        }
    }

    class Salak extends Buah{
        var $harga;
        var $totalHarga;

        public function __construct($banyak){
            parent::__construct("Salak", $banyak);
            $this->harga = 10000;
            $this->totalHarga = $this->harga * $banyak;
        }

        public function info(){
            echo "{$this->nama} - - {$this->banyak} - - {$this->harga} - - {$this->totalHarga}";
        }
    }

    
?>
