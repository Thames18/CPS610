<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block w3-card-2" style="width:20%">
    <h3 class="w3-bar-item w3-black">
        <a href="home.php" class="w3-bar-item w3-black">CCPS 610 Assignment</a>
    </h3>

    <!-- Task 1 Related Activities-->
    <div class="w3-blue w3-card-2 w3-container">
        <p>Employee Main Menu</p>
    </div>
    <a href="employee_hiring_form.php" class="w3-bar-item w3-button">Employee Hiring Form</a>
    <a href="update2.php" class="w3-bar-item w3-button">Update Employee Records</a>

    <!-- Task 2 Related Activities-->
    <!--TODO: link buttons to appropriate files-->
    <div class="w3-container w3-green w3-card-2">
        <p>Jobs Main Menu</p>
    </div>
    <a href="getjob.php" class="w3-bar-item w3-button">Identify Job Description</a>
    <a href="changejob.php" class="w3-bar-item w3-button">Change Job Description</a>
    <a href="****.php" class="w3-bar-item w3-button">Create New Job</a>

    <!-- Task 3 Related Activities-->
    <!--TODO: link buttons to appropriate files-->
    <div class="w3-container w3-red w3-card-2">
        <p>Departments Main Menu</p>
    </div>
    <a href="****.php" class="w3-bar-item w3-button">Verify Salary Range</a>

</div>

  // <?php
           
		   // require "mysql_connect.php";
            // $sql = "CREATE OR REPLACE FUNCTION get_job (p_jobid IN jobs.job_id%type)
// RETURN jobs.job_title%type IS
// v_title jobs.job_title%type;
// BEGIN
// SELECT job_title%typeINTO v_title
// FROM jobs
// WHERE job_id = p_jobid;
// RETURN v_title;
// END get_job;"
	
// ?>

<div class="w3-container w3-card-2" style="margin-left:20%">
    <div class="w3-container w3-card-2 w3-teal">
        <h1>Job Description </h1>
    </div>
<br>
    <?php
    if(isset($_POST['getjob'])) {
        require 'mysql_connect.php';

        $job_id = mysqli_real_escape_string($connection, $_POST['job_id']);
        $job_title = mysqli_real_escape_string($connection,$_POST['job_title']);


        if (($job_id != "") && ($job_title != "")) {
            $sql = "SELECT job_id ,job_title from hr_jobs";
            $return_value = mysqli_query($connection, $sql);
            if (!$return_value) {
                die('Could not update data: ' . mysqli_error($connection));
        }
		}
        mysqli_close($connection);
    }
    ?>

 <?php
    try {
        require 'mysql_connect.php';
        $query = "SELECT * FROM hr_jobs";
        //first pass just gets the column names
        print "<table>&nbsp;";
        $result = $connection->query($query);
        //return only the first row (we only need field names)
        $row = $result->fetch_assoc();
        print "&nbsp;<tr>";
        foreach ($row as $field => $value){
            print " <th>&nbsp;$field</th>";
        } // end foreach
        print "</tr>";
        //second query gets the data
        $data = $connection->query($query);
        $data->fetch_assoc();
        foreach($data as $row){
            print " <tr>";
            foreach ($row as $name=>$value){
                print " <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$value&nbsp;</td>";
            } // end field loop
            print " </tr>";
        } // end record loop
        print "</table>&nbsp;";
        mysqli_close($connection);
    } catch(mysqli_sql_exception $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    ?>
<br>

</div>
</body>
</html>
