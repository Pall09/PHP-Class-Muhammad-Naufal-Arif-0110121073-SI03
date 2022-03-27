<?php
    class Mahasiswa {
        public $nim;
        public $nama;
        public $prodi;
        public $tahunAngkatan;
        public $ipk;

        function __construct($nama, $nim) {
            $this->nim = $nim;
            $this->nama = $nama;
        }

        function nilaiIpk() {
            if ($this->ipk < 0 || $this->ipk > 4) {
                return 'Tidak Terdaftar';
            } else if ($this->ipk >= 3.75) {
                return 'Cum Laude';
            } else if ($this->ipk >= 3.0) {
                return 'Memuaskan';
            } else if ($this->ipk >= 2.0) {
                return 'Baik';
            } else if ($this->ipk > 0) {
                return 'Cukup';
            } else {
                return "Nilai 0!";
            }
        }
    }

?>