<?php
require_once('../app/config/config.php');
require_once APP_ROOT.'../app/libs/DBConnection.php';
//require_once APP_ROOT.'/app/services/TheLoaiService.php';
//$TheLoaiService = new TheLoaiService();
//$TheLoaiService->getAllLop();
//$caclop = $TheLoaiService->getAllLop();
//
//echo "<pre>";
//print_r($caclop);
//echo "</pre>";

$controller = isset($_GET['controller'])?$_GET['controller']:'home';
$action = isset($_GET['action'])?$_GET['action']:'index';

if ($controller=='home'){
    require_once APP_ROOT.'/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
}else{
    echo "Không tồn tại URL";
}