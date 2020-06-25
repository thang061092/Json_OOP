<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once '../src/Employee.php';
    include_once '../src/EmployeeManager.php';
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $employee = new Employee($id, $name, $address);
    $employeeManager = new EmployeeManager('../data.json');
    $employeeManager->add($employee);
    header('location: ../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    Id:
    <input type="text" name="id">
    Name:
    <input type="text" name="name">
    Address:
    <input type="text" name="address">
    <button type="submit">Add</button>
</form>

</body>
</html>
