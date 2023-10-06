<?php
require_once APP_ROOT.'/app/models/Doctor.php';
class DoctorService{
    public function getAllDoctor(){
        //Buoc1 : ket noi database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        //Buoc 2: truy van du lieu
        $sql = "SELECT * FROM bacsi";
        $stmt = $conn->query($sql);

        //Buoc 3: Xu li ket qua tra ve
        $doctors = [];
        while ($row = $stmt->fetch()){
            $doctor = new Doctor($row['id'], $row['tenBacSi'] , $row['chuyenKhoa']);
            $doctors[] = $doctor;
        }
        return $doctors;
    }
}