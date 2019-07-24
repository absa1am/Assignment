<?php
// Employee Management Application (Console)
$servername = 'localhost';
$database = 'employees';
$username = 'root';
$password = '';

// Connect to server
$conn = new mysqli($servername, $username, $password);

// Checking connection
if($conn->connect_error) {
    die("Error: ".$conn->error);
}

// Create database
$conn->query("CREATE DATABASE IF NOT EXISTS employees");

// Connect to database
$conn = new mysqli($servername, $username, $password, $database);

// Create database table
$conn->query("CREATE TABLE IF NOT EXISTS info (
    employee_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(50) NOT NULL,
    employee_age INT(4) UNSIGNED,
    employee_status VARCHAR(50) NOT NULL,
    employee_salary INT(10) UNSIGNED,
    employee_email VARCHAR(50) NOT NULL,
    join_date TIMESTAMP
)");

$conn->query("CREATE TABLE IF NOT EXISTS log (
    employee_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    employee_name VARCHAR(50) NOT NULL,
    employee_attendence INT(6) UNSIGNED
)");

// User command handle
while(true) {
    echo "Please choose option:\n";
    echo "\t1. Input employee info\n";
    echo "\t2. Log attendence\n";
    echo "\t3. View report\n";
    echo "\t0. Exit\n";
    echo "Enter option: ";

    fscanf(STDIN, "%d\n", $n);

    if(!$n) break;
    else if($n == 1) {
        // Insert employee info
        $stmt = $conn->prepare("INSERT INTO info (employee_name, employee_age, employee_status, employee_salary, employee_email) VALUES (?, ?, ?, ?, ?)");
        $stmt2 = $conn->prepare("INSERT INTO log (employee_name, employee_attendence) VALUES (?, ?)");

        $stmt->bind_param("sdsds", $employee_name, $employee_age, $employee_status, $employee_salary, $employee_email);
        $stmt2->bind_param("sd", $employee_name2, $employee_attendence);

        echo "Name: ";
        fscanf(STDIN, "%[^\n]s\n", $employee_name);

        $employee_attendence = 0;
        $employee_name2 = $employee_name;

        $stmt2->execute();
        $stmt2->close();

        echo "Age: ";
        fscanf(STDIN, "%d\n", $employee_age);
        echo "Status: ";
        fscanf(STDIN, "%[^\n]s\n", $employee_status);
        echo "Salary: ";
        fscanf(STDIN, "%d\n", $employee_salary);
        echo "Email: ";
        fscanf(STDIN, "%[^\n]s\n", $employee_email);
        
        $stmt->execute();
        echo "Information recorded!\n\n";
        $stmt->close();
    } else if($n == 2) {
        // Insert employee attendence
        echo "Enter employee id: ";
        fscanf(STDIN, "%d\n", $employee_id);
        $atndnce = $conn->query("SELECT employee_attendence FROM log WHERE employee_id = $employee_id")->fetch_object()->employee_attendence;
        $conn->query("UPDATE log SET employee_attendence = $atndnce + 1 WHERE employee_id = $employee_id");
    } else if($n == 3) {
        // View report
        echo "\t    Employee Name    \t\t\t"."Total Attendence\n";
        echo "\t.....................\t\t\t................\n";
        $result = $conn->query("SELECT * FROM log");
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "\t".$row['employee_name']."\t\t\t\t\t\t\t".$row['employee_attendence']."\n";
            }
            echo "\n";
        } else {
            echo "\tNo data found!\n\n";
        }
    } else {
        // Handling invalid command
        echo "Invalid command!\n\n";
    }
}

// Close connection
$conn->close();