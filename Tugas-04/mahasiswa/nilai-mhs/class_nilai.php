<?php
    class NilaiMahasiswa {
        public $nim;
        public $matkul;
        public $nilai;

        function __construct($nim, $matkul, $nilai) {
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->nilai = $nilai;

        }

        function grade($nilai) {
            if ($nilai <= 35) {
                return "E";
            } elseif ($nilai <= 55) {
                return "D";
            } elseif ($nilai <= 69) {
                return "C";
            }  else if ($nilai <= 84) {
                return "B";
            } elseif ($nilai <= 100) {
                return "A";
            } elseif ($nilai <= 0 || $nilai > 100) {
                return "Nilai 0 atau tidak sesuai!";
            }
        }

        function hasil($nilai) {
            if ($nilai > 100 || $nilai < 0) {
                return "Nilai tidak sesuai!";
            } elseif ($nilai < 56) {
                return "Tidak Lulus";
            } elseif ($nilai <= 100) {
                return "Lulus";
            }
        }
    }
?>