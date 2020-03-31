<?php
    if(!isset($_SESSION)) {
        session_start();
    }
//include 'mysql_connect.php';

$host = "localhost";
$user = "root";
$password = "admin";
$database = "hr_schema";
$port = "3306";
$socket = "MySQL";

// Create connection
$connection = mysqli_connect(
    $host,
    $user,
    $password,
    $database,
    $port,
    $socket);
	      

if(isset($_POST['btn_insert_user'])){
    try{
    $sql = "INSERT INTO employees(EMPLOYEE_ID, FIRST_NAME, LAST_NAME, EMAIL,PHONE_NUMBER, HIRE_DATE,JOB_ID, SALARY, MANAGER_ID, DEPARTMENT_ID   ) 
 VALUES (:EMPLOYEES_SEQ.NEXTVAL, :password, :accountType)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':EMPLOYEES_SEQ.NEXTVAL', $EMPLOYEE_ID);
    $stmt->bindParam(':p_first_name', $FIRST_NAME);
    $stmt->bindParam(':p_last_name ', $ LAST_NAME);


    $EMPLOYEE_ID = $_POST['EMPLOYEES_SEQ.NEXTVAL'];
    $FIRST_NAME = $_POST['p_first_name'];
    $LAST_NAME = $_POST['p_last_name'];

    $stmt->execute();

    $_SESSION['message'] = "Insert Successful!";
    $_SESSION['msg_type'] = "success";
    header("location: ../maintain_insert.php");
    }
    catch(PDOException $e)
    {
    $_SESSION['message'] = "Error: " . $e->getMessage();
    $_SESSION['msg_type'] = "danger";
    header("location: ../employee_hiring_form.php");
    }
}


    $conn = null;
?>
