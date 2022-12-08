<?php
require_once('../connect.php');
$emp_no = $_GET['emp_no'];
$query = $conn->query("SELECT * FROM employees
LEFT JOIN titles ON titles.emp_no = employees.emp_no 
where employees.emp_no = $emp_no
");
$employee = $query->fetch(); // все записи
// print_r($employee);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Сотрудники</title>
</head>
<body>
<div>
    <p><strong>Имя:</strong> <?php echo $employee['first_name']?></p>
    <p><strong>Фамилия:</strong> <?php echo $employee['last_name']?></p>
    <p><strong>Должность:</strong> <?php echo $employee['title']?></p>

</div>



</body>
</html>