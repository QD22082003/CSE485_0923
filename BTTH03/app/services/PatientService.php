<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService{
    public function getAllPatient(){
        //Buoc1 : ket noi database
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        //Buoc 2: truy van du lieu
        $sql = "SELECT bn.id, bn.tenBenhNhan, bn.ngayKham,bn.trieuChung, bs.tenBacSi FROM benhnhan as  bn inner join bacsi as bs on bs.id= bn.idBacSi";
        $stmt = $conn->query($sql);

        //Buoc 3: Xu li ket qua tra ve
        $Patients = [];
        while ($row = $stmt->fetch()){
            $Patient = new Patient($row['id'], $row['tenBenhNhan'], $row['ngayKham'], $row['trieuChung'],$row['tenBacSi']);
            $Patients[] = $Patient;
        }
        return $Patients;

    }
//    public function deleteSinhVien($idSinhVien) {
//
//        $dbConnection = new DBConnection();
//        $conn = $dbConnection->getConnection();
//        //Buoc 2: Thuc hien truy van
//        if($conn != null){
//            $sql = "DELETE FROM patient WHERE id = $idSinhVien";
//            $stmt = $conn->prepare($sql);
//            $result =  $stmt->execute();
//            //Buoc 3: Xu ly ket qua
//            if($result){
//                return true;
//            }else{
//                return false;
//            }
//        }else{
//            return true;
//        }
//    }
}