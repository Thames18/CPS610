<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block w3-card-2" style="width:25%">
    <h3 class="w3-bar-item w3-black">
        <a href="home.php" class="w3-bar-item w3-black">CCPS 610 Assignment</a>
    </h3>

    <!-- Task 1 Related Activities-->
    <!--TODO: link buttons to appropriate files-->
    <div class="w3-blue w3-card-2 w3-container">
        <p>Employee Main Menu</p>
    </div>
    <a href="employee_hiring_form.php" class="w3-bar-item w3-button">Employee Hiring Form</a>
    <a href="****.php" class="w3-bar-item w3-button">Update Employee Records</a>

    <!-- Task 2 Related Activities-->
    <!--TODO: link buttons to appropriate files-->
    <div class="w3-container w3-green w3-card-2">
        <p>Jobs Main Menu</p>
    </div>
    <a href="actorInfo.php" class="w3-bar-item w3-button">Identify Job Description</a>
    <a href="movieInfo.php" class="w3-bar-item w3-button">Change Job Description</a>
    <a href="****.php" class="w3-bar-item w3-button">Create New Job</a>

    <!-- Task 3 Related Activities-->
    <!--TODO: link buttons to appropriate files-->
    <div class="w3-container w3-red w3-card-2">
        <p>Departments Main Menu</p>
    </div>
    <a href="update.php" class="w3-bar-item w3-button">Verify Salary Range</a>
</div>

<div class="w3-container w3-card-2" style="margin-left:26%">
    <div class="w3-container w3-card-2 w3-teal">
        <h1>Employee Hiring Form</h1>
    </div>

<form action="insert.php" id="add_employee" method="post">
        <br>
        <label>First Name</label>
        <label>
            <input class="w3-input w3-border w3-round" type="text" name="first_name" id="first_name">
        </label>
        <label>Last Name</label>
        <label>
            <input class="w3-input w3-border w3-round" type="text" name="last_name" id="last_name">
        </label>
        <label>Email</label>
        <label>
            <input class="w3-input w3-border w3-round" type="text" name="email" id="email">
        </label>
        <br><br>
        <label>Phone</label>
        <label>
            <input class="w3-input w3-border w3-round" type="text" name="phone_number" id="phone_number">
        </label>
        <label>Hire Date</label>
        <label>
            <input class="w3-input w3-border w3-round" type="text" name="hire_date" id="hire_date">
        </label>
        <label>Salary</label>
        <label>
            <input class="w3-input w3-border w3-round" type="text" name="salary" id="salary">
        </label>
        <br><br>

<!--		<select>-->
<!--			<option selected disabled>Manager: </option>-->
<!--			<option value="volvo">Employee_Id</option>-->
<!--			<option value="saab">First_Name</option>-->
<!--			<option value="opel">Last_Name</option>-->
<!--		</select>-->
<!--          <br><br>-->
<!---->
<!--		<select>-->
<!--		<option selected disabled>Job: </option>-->
<!--		  <option value="volvo">Job_id</option>-->
<!--		  <option value="saab">Job_Title</option>-->
<!--		  <option value="saab">min_salary</option>-->
<!--		  <option value="saab">max_salary</option>-->
<!---->
<!--		</select>-->
<!--        <br><br>-->
<!---->
<!--		<select>-->
<!--		<option selected disabled>Department:</option>-->
<!--		  <option value="volvo">Department_Id</option>-->
<!--		  <option value="saab">Department_Name</option>-->
<!--		  <option value="saab">location_id</option>-->
<!--		</select>-->
  
        <br><br>
        
    <!-- TODO: complete dropdown/table display for Job_id and job_title -->
    <!-- Dropdown/table display for Job Table -->

        <label for='job_var'>Select Job Title:</label>
        <select name='job_id'>
            <?php
            require "mysql_connect.php";
            $sql = "select job_id, job_title from hr_jobs";
            $result = $connection->query($sql);
            echo "<option>Select Job Title...</option>";
            while ($row = $result->fetch_assoc()){
                $rowVal = "{$row['job_id']}  {$row['job_title']}";
                echo "<option value=$row[job_id]>$rowVal</option>";
            }
            ?>
        </select>

<!--    --><?php
//    if(isset($_POST["submit"]))
//    {
//        $job_var=$_POST["job_var"];
//        echo '</br>' . " Selected Value is : " . $job_var;
//    }
//    ?>
    <br><br>
    <button type="submit" name="submit" >Submit</button>
      <input type="submit" name="submit" value="Hire">
   <input type="reset" onlclick="myFunction" value="Cancel">
    </form>


</div>
</body>
</html>
