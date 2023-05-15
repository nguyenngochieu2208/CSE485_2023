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

        public function read($id) {
            // Tìm sinh viên theo id
            foreach ($this->students as $student) {
                if ($student->getId() == $id) {
                    return $student;
                }
            }
            return null;
        }

        public function update(Student $student) {
            // Cập nhật thông tin sinh viên và ghi vào file
            foreach ($this->students as $key => $sv) {
                if ($sv->getId() == $student->getId()) {
                    $this->students[$key] = $student;
                    $this->saveDataToFile();
                    return true;
                }
            }
            return false;
        }

        public function delete($id) {
            // Xóa sinh viên theo id và ghi vào file
            foreach ($this->students as $key => $student) {
                if ($student->getId() == $id) {
                    unset($this->students[$key]);
                    $this->saveDataToFile();
                    return true;
                }
                }
                    return false;
        }
    
        public function getAll() {
            // Trả về danh sách sinh viên
            return $this->students;
        }
        
        private function saveDataToFile() {
            // Ghi mảng sinh viên vào file
            $data = '';
            foreach ($this->students as $student) {
                $data .= "\n{$student->getId()},{$student->getTen()},{$student->getLop()},{$student->getDiem()}";
            }
            print_r($data) ;
            file_put_contents($this->dataFile, $data);
        }

    }
?>