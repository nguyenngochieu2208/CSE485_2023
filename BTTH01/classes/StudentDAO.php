<?php 
    class StudentDAO {
        private $students = [];
        private $dataFile = "data/students.txt";
    
        public function __construct() {
            // Đọc dữ liệu từ file và lưu vào mảng $students
            $data = file_get_contents($this->dataFile);
            if ($data) {
                $lines = explode(PHP_EOL, $data);
                foreach ($lines as $line) {
                    $fields = explode(',', $line);
                    $student = new Student($fields[0], $fields[1], $fields[2], $fields[3]);
                    $this->students[] = $student;
                }
            }
        }
    
        public function create(Student $student) {
            // Thêm sinh viên vào mảng và ghi vào file
            $this->students[] = $student;
            $this->saveDataToFile();
        }
    
        public function getAll() {
            // Trả về danh sách sinh viên
            return $this->students;
        }
        
        private function saveDataToFile() {
            // Ghi mảng sinh viên vào file
            $data = '';
            foreach ($this->students as $student) {
                $data .= "{$student->getId()},{$student->getTen()},{$student->getLop()},{$student->getDiem()}\n";
            }
            print_r($data) ;
            file_put_contents($this->dataFile, $data);
        }

    }
?>