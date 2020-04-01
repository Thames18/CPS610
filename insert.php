<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "admin", "hr_schema");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
 // Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone_number = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
$hire_date = mysqli_real_escape_string($link, $_REQUEST['hire_date']);
$salary = mysqli_real_escape_string($link, $_REQUEST['salary']);
$job_id = mysqli_real_escape_string($link, $_REQUEST['job_id']);
$manager_id = mysqli_real_escape_string($link, $_REQUEST['manager_id']);
$department_id = mysqli_real_escape_string($link, $_REQUEST['department_id']);


// Attempt insert query execution
$sql = "INSERT INTO hr_employees (first_name, last_name, email, phone_number, hire_date, salary, job_id, manager_id, department_id)
 VALUES ('$first_name', '$last_name', '$email', '$phone_number' , '$hire_date' , '$salary',  '$job_id',  '$manager_id',  '$department_id')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>