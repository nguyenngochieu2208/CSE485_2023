<?php
    class Student
    {
        private $id;
        private $ten;
        private $lop;
        private $diem;

        public function __construct($id, $ten, $lop, $diem) {
            $this->id = $id;
            $this->ten = $ten;
            $this->lop = $lop;
            $this->diem = $diem;
        }

        // Các phương thức getter và setter cho các thuộc tính

        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function getTen() {
            return $this->ten;
        }

        public function setTen($ten) {
            $this->ten = $ten;
        }

        public function getLop() {
            return $this->lop;
        }

        public function setLop($lop) {
            $this->lop = $lop;
        }

        public function getDiem() {
            return $this->diem;
        }

        public function setDiem($diem) {
            $this->diem = $diem;
        }

    }
?>