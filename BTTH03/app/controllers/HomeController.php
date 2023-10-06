<?php
require_once APP_ROOT.'/app/services/PatientService.php';
require_once APP_ROOT.'/app/services/DoctorService.php';
class HomeController{
    public function index(){
        //Goi du lieu tu PatientService
        $patientService = new PatientService();
        $patient = $patientService->getAllPatient();
        //Render du lieu lay duoc ra HomePage

        $doctorService = new DoctorService();
        $doctor = $doctorService->getAllDoctor();
        include APP_ROOT.'/app/view/home/index.php';
    }
//    public function deletePatient(){
//        $id = isset($_GET['idSelect'])? $_GET['idSelect']:null;
//        $patientService = new PatientService();
//        $check = $patientService->deletePatient($id);
//
//        $this->index();
//    }

}