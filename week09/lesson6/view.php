<?php
//account info
//
$serverName = "localhost";
$userName = "admin";
$password = "password1";
$database = "CompanyDatabaseExample";

//connect to database
//
$con = mysqli_connect($serverName,$userName,$password,$database);

if (mysqli_connect_errno()) {
    die("<br>Connction Failed: <br>" . mysqli_connect_errno() . "<br>" . $con->connect_error);
}

//vars
//
$com1 = "SELECT * FROM Customer";
$que1 = mysqli_query($con,$com1);

$com2 = "SELECT * FROM Employee";
$que2 = mysqli_query($con,$com2);

$com3 = "SELECT * FROM ZipCodes";
$que3 = mysqli_query($con,$com3);

//echo styles
//
echo "<style>table, th, td {border: 1px solid black;text-align:left;padding:5px;}</style>";

//echo table info
//
//customer table
if ($que1) {
    echo "<h1>Customer</h1><table><tr><th>Customer ID</th><th>First Name</th><th>Last Name</th><th>Job Title</th><th>Zip Code</th><th>Email</th></tr>";
    while ($newArray = mysqli_fetch_array($que1, MYSQLI_ASSOC)) {
        $id = $newArray['custID'];
        $fName = $newArray['fName'];
        $lName = $newArray['lName'];
        $jobTitle = $newArray['jobTitle'];
        $zip = $newArray['zipCode'];
        $email = $newArray['email'];
        echo "<tr><td>$id</td><td>$fName</td><td>$lName</td><td>$jobTitle</td><td>$zip</td><td>$email</td></tr>";
    }
    echo "</table>";
} else {
    die("Failed to find data: " . mysqli_error($con));
}

//employee table
if ($que2) {
    echo "<h1>Employee</h1><table><tr><th>Customer ID</th><th>First Name</th><th>Last Name</th><th>Job Title</th><th>Zip Code</th><th>Email</th></tr>";
    while ($newArray = mysqli_fetch_array($que2, MYSQLI_ASSOC)) {
        $id = $newArray['employeeID'];
        $fName = $newArray['fName'];
        $lName = $newArray['lName'];
        $jobTitle = $newArray['jobTitle'];
        $zip = $newArray['zipCode'];        
        $email = $newArray['email'];
        echo "<tr><td>$id</td><td>$fName</td><td>$lName</td><td>$jobTitle</td><td>$zip</td><td>$email</td></tr>";
    }
    echo "</table>";
} else {
    die("Failed to find data: " . mysqli_error($con));
}

//zipCode table
if ($que3) {
    echo "<h1>Zip Codes</h1><table><tr><th>Zip Code</th><th>City</th><th>State</th><th>Country</th></tr>";
    while ($newArray = mysqli_fetch_array($que3, MYSQLI_ASSOC)) {
        $zipCode = $newArray['zipCode'];
        $city = $newArray['city'];
        $state = $newArray['state'];
        $country = $newArray['country'];
        echo "<tr><td>$zipCode</td><td>$city</td><td>$state</td><td>$country</td></tr>";
    }
    echo "</table>";
} else {
    die("Failed to find data: " . mysqli_error($con));
}

?>