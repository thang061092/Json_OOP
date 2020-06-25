<?php
$id = $_REQUEST['id'];
include_once '../src/EmployeeManager.php';

$employManager = new EmployeeManager('../data.json');
$employManager->delete($id);
header('location: ../index.php');
?>